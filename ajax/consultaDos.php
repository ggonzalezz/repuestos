<?php
require_once "../modelos/ConsultaDos.php";

$consultaDos=new ConsultaDos();

$iddetalle_venta=isset($_POST["iddetalle_venta"])? limpiarCadena($_POST["iddetalle_venta"]):"";
$idventa=isset($_POST["idventa"])? limpiarCadena($_POST["idventa"]):"";
$idarticulo=isset($_POST["idarticulo"])? limpiarCadena($_POST["idarticulo"]):"";
$cantidad=isset($_POST["cantidad"])? limpiarCadena($_POST["cantidad"]):"";
$precio_venta=isset($_POST["precio_venta"])? limpiarCadena($_POST["precio_venta"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";


switch ($_GET["op"]){
    case 'guardaryeditar':
		if (empty($iddetalle_venta)){
			$rspta=$consultaDos->insertar($idventa,$idarticulo,$cantidad,$precio_venta);
			echo $rspta ? "Agregado" : "A fallado";
		}
		else {
			$rspta=$consultaDos->editar($iddetalle_venta, $descripcion);
			echo $rspta ? "Nota añadida" : "No se pudo añadir la nota";
		}
	break;

  case 'mostrar':
		$rspta=$consultaDos->mostrar($iddetalle_venta);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;


	case 'desactivar':
		$rspta=$consultaDos->desactivar($iddetalle_venta);
 		echo $rspta ? "Servido" : "No se Pudo Confirmar";
	break;



	case 'listar':
		$rspta=$consultaDos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
          "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->iddetalle_venta.')"><i class="fa fa-pencil"></i></button>'.
            ' <button class="btn btn-danger" onclick="eliminar('.$reg->iddetalle_venta.')"><i class="fa fa-close"></i></button>':
            '<button class="btn btn-warning" onclick="mostrar('.$reg->iddetalle_venta.')"><i class="fa fa-pencil"></i></button>',

 				"1"=>$reg->cantidad,
 				"2"=>$reg->nombre,
                "3"=>$reg->medida,
                "4"=>$reg->descripcion,
                "5"=>$reg->mesa,
 				"6"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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
