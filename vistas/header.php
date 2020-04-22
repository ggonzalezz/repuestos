<?php
if (strlen(session_id()) < 1)
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GB | Repuestos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/nachos.jpg">
    <link rel="shortcut icon" href="../public/img/nachos.jpg">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Repuestos</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Repuestos</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">
                    <p>

                      <small>Repuestos </small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <?php
            if ($_SESSION['escritorio']==1)
            {
              echo '<li>
              <a href="escritorio.php">
                <i class="fa fa-tasks"></i> <span>Inicio</span>
              </a>
            </li>';
            }
            ?>

            <?php
            if ($_SESSION['almacen']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-briefcase"></i>
                <span>Almacén</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="articulo.php"><i class="fa fa-car"></i> Artículos</a></li>
                <li><a href="categoria.php"><i class="fa fa-check"></i> Categorías</a></li>
                <li><a href="modelo.php"><i class="fa fa-check"></i> Modelos</a></li>
                <li><a href="marca.php"><i class="fa fa-paint-brush"></i> Marcas</a></li>
                <li><a href="color.php"><i class="fa fa-paint-brush"></i> Colores</a></li>

              </ul>
            </li>';
            }
            ?>

            <?php
            if ($_SESSION['compras']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ingreso.php"><i class="fa fa-check"></i> Ingresos</a></li>
                <li><a href="proveedor.php"><i class="fa fa-check"></i> Proveedores</a></li>
              </ul>
            </li>';
            }
            ?>

            <?php
            if ($_SESSION['ventas']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="venta.php"><i class="fa fa-check"></i> Ventas</a></li>
                <li><a href="cliente.php"><i class="fa fa-check"></i> Clientes</a></li>
              </ul>
            </li>';
            }
            ?>

            <?php
            if ($_SESSION['acceso']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-unlock-alt"></i> <span>Admon Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="usuario.php"><i class="fa fa-check"></i> Usuarios</a></li>
                <li><a href="permiso.php"><i class="fa fa-check"></i> Permisos</a></li>

              </ul>
            </li>';
            }
            ?>

            <?php
            if ($_SESSION['consultac']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Consulta Compras</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="comprasfecha.php"><i class="fa fa-check"></i> Consulta Compras</a></li>
              </ul>
            </li>';
            }
            ?>

             <?php
            if ($_SESSION['consultav']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-signal"></i> <span>Consulta Ventas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventasfechacliente.php"><i class="fa fa-check"></i> Consulta Ventas</a></li>
              </ul>
            </li>';
            }
            ?>


              <?php
            if ($_SESSION['noadmin']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-signal"></i> <span>Reporte</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="noadmin.php"><i class="fa fa-check"></i>Reportes por Fecha</a></li>
              </ul>
            </li>';
            }
            ?>




            <?php
            if ($_SESSION['consultas']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-refresh"></i> <span>Cocineros & Bartends</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="cocina.php"><i class="fa fa-cutlery"></i>Cocina</a></li>
                <li><a href="bebida.php"><i class="fa fa-beer"></i>Bebida</a></li>
              </ul>
            </li>';
            }
            ?>

            <?php
            if ($_SESSION['ayuda']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-question"></i> <span>Ayuda</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="tutorial.php"><i class="fa fa-check"></i> Tutorial</a></li>
              </ul>
            </li>';
            }
            ?>



          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
