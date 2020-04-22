var table;

//Función que se ejecuta al inicio
function init(){
	mostrarforma(false);
    lista();

	$("#formularios").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
    
$.post("../ajax/venta.php?op=selectArticulo", function(r){
	            $("#idarticulo").html(r);
	            $('#idarticulo').selectpicker('refresh');
	});	
    
}

//Función limpiar
function limpiare()
{
	$("#idventa").val("");
	$("#idarticulo").val("");
	$("#cantidad").val("");
    $("#precio_venta").val("");
}

//Función mostrar formulario
function mostrarforma(flag)
{
	limpiare();
	if (flag)
	{
		$("#listador").show();
		$("#formularioregistros").show();
		$("#btnGuarda").prop("disabled",false);
		$("#btnagregarArticulo").hide();
        listarArticulos();
       
	}
	else
	{
 $("#btnAgregarArt").show();
		$("#listador").hide();
		$("#formularioregistros").hide();
		$("#btnagregarArticulo").show();
	}
}
////////////////////////////////77777



function lista()
{
	table=$('#tbllistador').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            
		           
		        ],
		"ajax":
				{
					url: '../ajax/detalle.php?op=listar',
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


//Función ListarArticulos

function listarArticulos()
{
	tabla=$('#tblarticulos').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            
		        ],
		"ajax":
				{
					url: '../ajax/venta.php?op=listarArticulosVenta',
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

//Función cancelarform
function cancelarforma()
{
	limpiar();
	mostrarforma(false);
}

//Función Listar


function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuarda").prop("disabled",true);
	var formData = new FormData($("#formularios")[0]);

	$.ajax({
		url: "../ajax/detalle.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarforma(false);
	          table.ajax.reload();
	    }

	});
	limpiar();
}


init();





