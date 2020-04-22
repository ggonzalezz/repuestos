<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Detalle
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
    public function listar()
	{
		$sql="SELECT v.idventa, m.nombre as mesa   from  venta v INNER JOIN mesa m on m.idmesa=v.idmesa
INNER JOIN detalle_venta dv on dv.idventa = v.idventa
WHERE v.condicion=1 AND
v.estado = 'Aceptado' and dv.condicional='si' group by v.idventa;";
		return ejecutarConsulta($sql);
	}
    
    
    public function select()
	{
		$sql="SELECT v.idventa, m.nombre as mesa   from  venta v INNER JOIN mesa m on m.idmesa=v.idmesa
INNER JOIN detalle_venta dv on dv.idventa = v.idventa
WHERE v.condicion=1 AND
v.estado = 'Aceptado' and dv.condicional='si' group by v.idventa;";
		return ejecutarConsulta($sql);		
	}


}

?>
