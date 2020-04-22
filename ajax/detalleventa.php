<?php 
require_once "../modelos/DetalleVenta.php";

$detalleventa = new DetalleVenta();


$iddetalle_venta=isset($_POST["iddetalle_venta"])? limpiarCadena($_POST["iddetalle_venta"]):"";
$idventa=isset($_POST["idventa"])? limpiarCadena($_POST["idventa"]):"";
$idarticulo=isset($_POST["idarticulo"])? limpiarCadena($_POST["idarticulo"]):"";
$cantidad=isset($_POST["cantidad"])? limpiarCadena($_POST["cantidad"]):"";
$precio_venta=isset($_POST["precio_venta"])? limpiarCadena($_POST["precio_venta"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($iddetalle_venta)){
			$rspta=$detalleventa->insertar($idventa,$idarticulo,$cantidad,$precio_venta);
			echo $rspta ? "Agregado" : "A fallado";
		}
		else {
			$rspta=$detalleventa->editar($iddetalle_venta, $cantidad);
			echo $rspta ? "Detalle Actualizado" : "Detalle no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$detalleventa->eliminar($iddetalle_venta);
 		echo $rspta ? "Detalle Eliminado" : "Detalle no se puede eliminar";
	break;

	
	case 'mostrar':
		$rspta=$detalleventa->mostrar($iddetalle_venta);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$detalleventa->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->iddetalle_venta.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->iddetalle_venta.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->iddetalle_venta.')"><i class="fa fa-pencil"></i></button>',
 				"1"=>$reg->producto,
 				"2"=>$reg->medida,
                "3"=>$reg->mesa,
                "4"=>$reg->cantidad
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