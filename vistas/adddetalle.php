<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['ventas']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Agregar Artículos a Tickets <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                           <a class="btn btn-success" href="venta.php" id="referencia">Regresar a Ventas</a>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                      <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>No. Venta</th>
                            <th>Mesa</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                           <th>No. Venta</th>
                            <th>Mesa</th>
                          </tfoot>
                        </table>
                    </div>
                          
                          
                <div class="panel-body" style="height: 400px;" id="formularioregistros">
                       <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a data-toggle="modal" href="#myModal">           
                              <button id="btnAgregarArt" type="button" class="btn btn-primary"> <span class=""></span>Mostrar Artículos</button>
                            </a>
                          </div> 
                        <form name="formulario" id="formulario" method="POST">
                        
                          
                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Mesa:</label>
                            <select id="idventa" name="idventa" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          
                          
                          
                           <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Articulo(*):</label>
                            <select id="idarticulo" name="idarticulo" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>
                         
                          <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Cantidad:</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidad" maxlength="256" placeholder="cantidad" required>
                          </div>
                           <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Precio:</label>
                            <input type="text" class="form-control" name="precio_venta"  id="precio_venta" maxlength="256" placeholder="00.00" required>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                      
                    </div>
                          
                          
                          
                       
                    
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

  <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style="width: 65% !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Seleccione un Artículo</h4>
        </div>
        <div class="modal-body">
          <table id="tblarticulos" class="table table-striped table-bordered table-condensed table-hover">
            <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Medida</th>
                <th>Stock</th>
                <th>Precio Venta</th>
                <th>Imagen</th>
            </thead>
            <tbody>
              
            </tbody>
            <tfoot>
              <th>Opciones</th>
                <th>Nombre</th>
                <th>Categoría</th>
                 <th>Medida</th>
                <th>Stock</th>
                <th>Precio Venta</th>
                <th>Imagen</th>
            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>        
      </div>
    </div>
  </div>  
  <!-- Fin modal -->
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/adddetalle.js"></script>


<?php 
}
ob_end_flush();
?>


