var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

}



//Función mostrar formulario
function mostrarform(flag)
{

	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/consultaTres.php?op=listar',
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
//Función para guardar o editar





//Función para desactivar registros
function desactivar(iddetalle_venta)
{
	bootbox.confirm("¿Está Seguro de que ya sirvio este Pedido?", function(result){
		if(result)
        {
        	$.post("../ajax/consultaTres.php?op=desactivar", {iddetalle_venta : iddetalle_venta}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}




init();