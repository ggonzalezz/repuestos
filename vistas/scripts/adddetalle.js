var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
    listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
    
$.post("../ajax/venta.php?op=selectArticulo", function(r){
	            $("#idarticulo").html(r);
	            $('#idarticulo').selectpicker('refresh');
	});	
    
$.post("../ajax/detalle.php?op=selectVenta", function(r){
	            $("#idventa").html(r);
	            $('#idventa').selectpicker('refresh');

	});
    
}

//Función limpiar
function limpiar()
{
	$("#idventa").val("");
	$("#idarticulo").val("");
	$("#cantidad").val("");
    $("#precio_venta").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").show();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
        listarArticulos();
       
	}
	else
	{
 $("#btnAgregarArt").show();
		$("#listadoregistros").hide();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}
////////////////////////////////77777



function listar()
{
	tabla=$('#tbllistado').dataTable(
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
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar


function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/detalle.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}


init();





