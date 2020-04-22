<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class ConsultaTres
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	


	//Implementamos un método para desactivar categorías
	public function desactivar($iddetalle_venta)
	{
		$sql="UPDATE detalle_venta SET condicion='0' WHERE iddetalle_venta='$iddetalle_venta'";
		return ejecutarConsulta($sql);
	}

	

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT dv.iddetalle_venta,dv.cantidad, a.nombre,a.medida,m.nombre as mesa, dv.condicion FROM detalle_venta dv INNER JOIN venta v on dv.idventa= v.idventa INNER JOIN mesa m 
 on v.idmesa = m.idmesa
INNER JOIN articulo a on a.idarticulo=dv.idarticulo INNER JOIN categoria c on a.idcategoria= c.idcategoria
where dv.condicion =1 and c.nombre='Bebida';";
		return ejecutarConsulta($sql);		
	}
	
}

?>