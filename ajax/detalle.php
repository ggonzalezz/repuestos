<?php 
require_once "../modelos/Detalle.php";
$detalle=new Detalle();

$iddetalle_venta=isset($_POST["iddetalle_venta"])? limpiarCadena($_POST["iddetalle_venta"]):"";
$idventa=isset($_POST["idventa"])? limpiarCadena($_POST["idventa"]):"";
$idarticulo=isset($_POST["idarticulo"])? limpiarCadena($_POST["idarticulo"]):"";
$cantidad=isset($_POST["cantidad"])? limpiarCadena($_POST["cantidad"]):"";
$precio_venta=isset($_POST["precio_venta"])? limpiarCadena($_POST["precio_venta"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($iddetalle_venta)){
			$rspta=$detalle->insertar($idventa,$idarticulo,$cantidad,$precio_venta);
			echo $rspta ? "Agregado" : "A fallado";
		}
		else {
			
		}
	break;
        
        
    case 'listar':
		$rspta=$detalle->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->idventa,
 				"1"=>$reg->mesa
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
    case "selectVenta":
		$rspta = $detalle->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->idventa . '>' . $reg->mesa . '</option>';
				}
	break;
        
 

	
}
?>