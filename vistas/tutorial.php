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
if ($_SESSION['ayuda']==1)
{
?>
<div id="gr" class="container">
	<div class="row">
		<div class="row">
          
          <div class="col-md-6 col-md-offset-3">
            <h1 class="box-title">Bienvenid@ <?php echo '<span class="hidden-xs">'.$_SESSION["nombre"].'</span>' ?> a la Plataforma del SV T21 </h1>
                       
            </div>
           <div class="col-md-6 col-md-offset-3">
           
                <iframe width="823" height="441" src="https://www.youtube.com/embed/_sW5P-DHGXk?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>Explicación General del sistema</h3>
            </div>
            <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
         
            <div class="col-md-6 col-md-offset-3">
              <iframe width="823" height="441" src="https://www.youtube.com/embed/a0749IzJd80?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>Explicación del mantenimiento de almacén. Recuerde que en artículos solo existen los nombres de los mismos, el precio compra y venta se le asigna al realizar una compra. </h3>
            </div>
            
           <div class="col-md-6 col-md-offset-3">
         
                       
            </div>

            <div class="col-md-6 col-md-offset-3">
              <iframe width="823" height="441" src="https://www.youtube.com/embed/8bFbZ9DKvIE?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <h3>Explicación de compras: En este parte es donde se le asigna el precio que se compró y precio de venta y la cantidad que se ingresó del producto</h3>
            </div>
        <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
             <div class="col-md-6 col-md-offset-3">
              <iframe width="823" height="441" src="https://www.youtube.com/embed/c37nAfpvYTg?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <h3>Explicación para realizar ventas: Recuerde que al realizar una venta solo le aparecerán los productos que su stock es mayor que cero.</h3>
            </div>
            
            
            
            <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
             <div class="col-md-6 col-md-offset-3">
             <iframe width="823" height="441" src="https://www.youtube.com/embed/VKSQMvCzfHQ?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <h3>Administración de accesos: Gestión de quien entrara al sistema y a que módulos tendrá permiso. </h3>
            </div>
            
            
            
             <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
             <div class="col-md-6 col-md-offset-3">
             <iframe width="823" height="441" src="https://www.youtube.com/embed/ZnPupEpHIQQ?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <h3>Consultas: Recuerde tener en su computadora instalado Excel para completar el reporte.</h3>
            </div>
            
            
             <div class="col-md-6 col-md-offset-3">
           
                       
            </div>
             <div class="col-md-6 col-md-offset-3">
             <iframe width="823" height="441" src="https://www.youtube.com/embed/veQzA-ReHzo?list=PLusMYEiCxVE1hw-IUT7qBgTQJeu-AfRPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <h3>Cocina y Bebida.</h3>
            </div>
         
            
           <div class="col-md-6 col-md-offset-3">
            <label></label>
                       
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
<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
<script type="text/javascript" src="scripts/articulo.js"></script>
<?php 
}
ob_end_flush();
?>