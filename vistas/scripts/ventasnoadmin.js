
var tabla;

//Función que se ejecuta al inicio
function init(){
	listar();
	//Cargamos los items al select cliente
	$.post("../ajax/articulo.php?op=selectCategoria", function(r){
	            $("#idcategoria").html(r);
	            $('#idcategoria').selectpicker('refresh');

	});
}


//Función Listar
function listar()
{
    var idcategoria = $("#idcategoria").val();
	var fecha_inicio = $("#fecha_inicio").val();
	var fecha_fin = $("#fecha_fin").val();
	

	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		          
		            'excelHtml5',
		         
		        ],
		"ajax":
				{
					url: '../ajax/consultas.php?op=reporteporfechaNoAdmin',
					data:{idcategoria: idcategoria,fecha_inicio: fecha_inicio,fecha_fin: fecha_fin},
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}


init();