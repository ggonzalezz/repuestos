<?php 
require_once "../marcas/Marca.php";

$marca=new Marca();

$idmarca=isset($_POST["idmarca"])? limpiarCadena($_POST["idmarca"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idmarca)){
			$rspta=$marca->insertar($nombre,$descripcion);
			echo $rspta ? "Marca registrado" : "Marca no se pudo registrar";
		}
		else {
			$rspta=$marca->editar($idmarca,$nombre,$descripcion);
			echo $rspta ? "Marca actualizado" : "Marca no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$marca->desactivar($idmarca);
 		echo $rspta ? "Marca Desactivado" : "Marca no se puede desactivar";
	break;

	case 'activar':
		$rspta=$marca->activar($idmarca);
 		echo $rspta ? "Marca activado" : "Marca no se puede activar";
	break;

	case 'mostrar':
		$rspta=$marca->mostrar($idmarca);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$marca->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idmarca.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idmarca.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idmarca.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idmarca.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre,
 				"2"=>$reg->descripcion,
 				"3"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>