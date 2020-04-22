<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class DetalleVenta
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


	//Implementamos un método para editar registros
	public function editar($iddetalle_venta, $cantidad)
	{
		$sql="UPDATE detalle_venta SET cantidad='$cantidad', condicion = 1 WHERE iddetalle_venta='$iddetalle_venta'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function eliminar($iddetalle_venta)
	{
		$sql="Delete from detalle_venta  WHERE  iddetalle_venta ='$iddetalle_venta'";
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
		$sql="SELECT dv.iddetalle_venta, a.nombre as producto,a.medida, m.nombre as mesa,dv.cantidad,dv.condicion  FROM detalle_venta dv INNER JOIN venta v
ON dv.idventa= v.idventa INNER JOIN articulo a on a.idarticulo= dv.idarticulo INNER JOIN mesa m on m.idmesa = v.idmesa
where v.estado='Aceptado' AND dv.estado='Aceptado'";
		return ejecutarConsulta($sql);
	}

}

?>
