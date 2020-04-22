<?php 
require_once "../modelos/ConsultaTres.php";

$consultaTres=new ConsultaTres();

$iddetalle_venta=isset($_POST["iddetalle_venta"])? limpiarCadena($_POST["iddetalle_venta"]):"";


switch ($_GET["op"]){
	

	case 'desactivar':
		$rspta=$consultaTres->desactivar($iddetalle_venta);
 		echo $rspta ? "Servido" : "No se Pudo Confirmar";
	break;



	case 'listar':
		$rspta=$consultaTres->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->iddetalle_venta.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->iddetalle_venta.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->iddetalle_venta.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->cantidad,
 				"2"=>$reg->nombre,
                "3"=>$reg->medida,
                "4"=>$reg->mesa,
 				"5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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