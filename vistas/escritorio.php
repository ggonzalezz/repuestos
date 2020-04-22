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

if ($_SESSION['escritorio']==1)
{
?>
<div id="gr" class="container">
	<div class="row">
		<div class="row">
          
          <div class="col-md-6 col-md-offset-3">
            <h1 class="box-title">Bienvenid@ <?php echo '<span class="hidden-xs">'.$_SESSION["nombre"].'</span>' ?> a la Plataforma del Control de Repuestos </h1>
                       
            </div>
           <div class="col-md-6 col-md-offset-3">
           
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../files/articulos/img5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../files/articulos/img5.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
         
            <div class="col-md-6 col-md-offset-3">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../files/articulos/img4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../files/articulos/img4.jpg"
                         alt="Another alt text">
                </a>
            </div>
            
           <div class="col-md-6 col-md-offset-3">
         
                       
            </div>

            <div class="col-md-6 col-md-offset-3">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../files/articulos/img1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../files/articulos/img1.jpg"
                         alt="Another alt text">
                </a>
            </div>
        <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
          <div class="col-md-6 col-md-offset-3">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../files/articulos/img2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../files/articulos/img2.jpg"
                         alt="Another alt text">
                </a>
            </div>
             <div class="col-md-6 col-md-offset-3">
 
                       
            </div>
             <div class="col-md-6 col-md-offset-3">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../files/articulos/img6.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../files/articulos/img6.jpg"
                         alt="Another alt text">
                </a>
            </div>
           <div class="col-md-6 col-md-offset-3">
            <label></label>
                       
            </div>
         
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>


<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/venta.js"></script>
<script type="text/javascript" src="scripts/inicio.js"></script>
<?php 
}
ob_end_flush();
?>



