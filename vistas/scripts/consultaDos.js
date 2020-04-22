var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

    $("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);
	})

}


function limpiar()
{


	$("#descripcion").val("");
	$("#iddetalle_venta").val("");
}




//Función mostrar formulario
function mostrarform(flag)
{
limpiar();
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
limpiar();
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
					url: '../ajax/consultaDos.php?op=listar',
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

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/consultaDos.php?op=guardaryeditar",
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




function mostrar(iddetalle_venta)
{
	$.post("../ajax/consultaDos.php?op=mostrar",{iddetalle_venta : iddetalle_venta}, function(data, status)
	{
		data = JSON.parse(data);
		mostrarform(true);


		$("#descripcion").val(data.descripcion);
 		$("#iddatalle_venta").val(data.iddetalle_venta);


 	})
}


//Función para desactivar registros
function desactivar(iddetalle_venta)
{
	bootbox.confirm("¿Está Seguro de que ya sirvio este Pedido?", function(result){
		if(result)
        {
        	$.post("../ajax/consultaDos.php?op=desactivar", {iddetalle_venta : iddetalle_venta}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});
        }
	})
}




init();
