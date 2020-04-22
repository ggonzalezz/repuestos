<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class ConsultaDos
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
     public function insertar($idventa,$idarticulo,$cantidad,$precio_venta)
	{
		$sql="INSERT INTO detalle_venta (idventa,idarticulo,cantidad,precio_venta,condicion)
		VALUES ('$idventa','$idarticulo','$cantidad','$precio_venta','1')";
		return ejecutarConsulta($sql);
	}


  public function editar($iddetalle_venta,$descripcion)
	{
		$sql="UPDATE detalle_venta SET descripcion='$descripcion' WHERE iddetalle_venta='$iddetalle_venta'";
		return ejecutarConsulta($sql);
	}


	//Implementamos un método para desactivar categorías
	public function desactivar($iddetalle_venta)
	{
		$sql="UPDATE detalle_venta SET condicion='0' WHERE iddetalle_venta='$iddetalle_venta'";
		return ejecutarConsulta($sql);
	}

    	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($iddetalle_venta)
	{
		$sql="SELECT * FROM detalle_venta WHERE iddetalle_venta='$iddetalle_venta'";
		return ejecutarConsultaSimpleFila($sql);
	}


	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT dv.iddetalle_venta,dv.cantidad, a.nombre,a.medida,m.nombre as mesa,dv.descripcion, dv.condicion FROM detalle_venta dv INNER JOIN venta v on dv.idventa= v.idventa INNER JOIN mesa m
 on v.idmesa = m.idmesa
INNER JOIN articulo a on a.idarticulo=dv.idarticulo INNER JOIN categoria c on a.idcategoria= c.idcategoria
where dv.condicion =1 and c.nombre='Comida';";
		return ejecutarConsulta($sql);
	}

}

?>
