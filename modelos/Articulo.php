<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Articulo
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($idcategoria,$idcolor,$idmodelo,$idmarca,$nombre,$descripcion,$imagen)
	{
		$sql="INSERT INTO articulo (idcategoria,idcolor,idmodelo,idmarca,nombre,descripcion,imagen,condicion)
		VALUES ('$idcategoria','$idcolor','$idmodelo','$idmarca','$nombre','$descripcion','$imagen','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idarticulo,$idcategoria,$idcolor,$idmodelo,$idmarca,$nombre,$descripcion,$imagen)
	{
		$sql="UPDATE articulo SET idcategoria='$idcategoria',idcolor='$idcolor', idmodelo='$idmodelo', idmarca='$idmarca',nombre='$nombre',descripcion='$descripcion',imagen='$imagen' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar registros
	public function desactivar($idarticulo)
	{
		$sql="UPDATE articulo SET condicion='0' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idarticulo)
	{
		$sql="UPDATE articulo SET condicion='1' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idarticulo)
	{
		$sql="SELECT * FROM articulo WHERE idarticulo='$idarticulo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
        ///SELECT a.idarticulo,a.idcategoria,c.nombre as categoria,a.idmedida,m.nombreMedida,a.nombre,a.stock,a.descripcion,a.imagen,a.condicion FROM ///articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria INNER JOIN medida m on m.idmedida = a.idmedida
        
		$sql="SELECT a.idarticulo,a.idcategoria,c.nombre as categoria,col.idcolor, col.nombre as color 
,mdl.idmodelo, mdl.nombre as modelo
,mrc.idmarca, mrc.nombre as marca
,a.nombre,a.stock,a.descripcion,a.imagen,a.condicion 

FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria INNER JOIN color col on col.idcolor = a.idcolor 
INNER JOIN modelo mdl on mdl.idmodelo= a.idmodelo inner join marca mrc on mrc.idmarca = a.idmarca";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos
	public function listarActivos()
	{
		$sql="SELECT a.idarticulo,a.idcategoria,c.nombre as categoria,col.idcolor, col.nombre as color 
,mdl.idmodelo, mdl.nombre as modelo
,mrc.idmarca, mrc.nombre as marca
,a.nombre,a.stock,a.descripcion,a.imagen,a.condicion 

FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria INNER JOIN color col on col.idcolor = a.idcolor 
INNER JOIN modelo mdl on mdl.idmodelo= a.idmodelo inner join marca mrc on mrc.idmarca = a.idmarca WHERE a.condicion= '1'
";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos, su último precio y el stock (vamos a unir con el último registro de la tabla detalle_ingreso)
	public function listarActivosVenta()
	{
		$sql="SELECT a.idarticulo,a.idcategoria,c.nombre as categoria
, col.nombre as color 
,mdl.idmodelo, mdl.nombre as modelo
,mrc.idmarca, mrc.nombre as marca
,a.nombre,a.stock,(SELECT precio_venta FROM detalle_ingreso WHERE idarticulo=a.idarticulo order by iddetalle_ingreso desc limit 0,1) as precio_venta,a.descripcion,a.imagen,a.condicion FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria 
INNER JOIN color col on col.idcolor = a.idcolor 
INNER JOIN modelo mdl on mdl.idmodelo= a.idmodelo inner join marca mrc on mrc.idmarca = a.idmarca
WHERE a.condicion='1' and a.stock > 0;";
		return ejecutarConsulta($sql);		
	}
    
    public function select()
	{
		$sql="SELECT * FROM articulo where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>