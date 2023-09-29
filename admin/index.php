
<!-- INCLUDE -->
  <?php
  include ("../app/config.php")
  ?>
<!-- ///INCLUDE -->
<!-- SESSION -->
  <?php
  session_start();
  if(isset($_SESSION['sesion_email'])){
    echo "si existe la session de ".$_SESSION['sesion_email'];
  }else{
    echo "no existe la session ....favor logearte";
    header('Location: '.$URL.'/index.html');
  }
  ?>
<!-- ////SESSION -->
<!DOCTYPE html>
<!-- HTML -->
  <html lang="es">
  <!-- HEAD -->
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo APP_NAME;?></title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    </head>
  <!-- ////HEAD -->
  <!-- BODY -->
    <body class="hold-transition sidebar-mini">
      <!-- wrapper --> 
        <div class="wrapper">
          <!-- MENU DE NAVEGACION DERECHA -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- CABEZERA DERECHA TITULO -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <h2><?php echo APP_NAME; ?> - Bienvenido</h2>
                  </li>
                </ul>
              <!-- ///CABEZERA DERECHA TITULO -->
              <!-- CABEZERA DERECHA LINK -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                      <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                      <i class="fas fa-th-large"></i>
                    </a>
                  </li>
                </ul>
              <!-- ////CABEZERA DERECHA LINK -->  
            </nav>
          <!-- //// MENU DE NAVEGACION DERECHA-->
          <!-- MENU DE NAVEGACION IZQUIERDA -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- INFO Y FOTO DE PERFIL -->
                <div class="sidebar"> 
                  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" 
                      class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                      <a href="#" class="d-block">
                      <b>stek-04@hotmail.com</b>
                      </a>
                    </div>
                  </div>
              <!--//// INFO Y FOTO DE PERFIL -->
              <!-- MENU CON MIS PAGINAS -->
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                          with font-awesome or any other icon font library -->
                      <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                            Usuarios
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Listado de usuarios</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Nuevo usuario</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Inactive Page</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            Lo nuevo
                            <span class="right badge badge-danger">New</span>
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link active" style="background-color:red">
                          <i class="nav-icon fas fa-door-open"></i>
                          <p>
                            Cerrar session
                          </p>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              <!-- ///MENU CON MIS PAGINAS-->
            </aside>
          <!-- ///MENU DE NAVEGACION IZQUIERDA -->
          <!-- CONTENIDO DERECHO -->
            <div class="content-wrapper">
              <!-- CONTENIDO DERECHO HEADER -->
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1 class="m-0">Admin - <?php echo APP_NAME; ?></h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>
              <!-- ///CONTENIDO DERECHO HEADER -->
              <!-- CONTENIDO DERECHO MAIN O BODY -->
                <h1>contenido</h1>
              <!-- ///CONTENIDO DERECHO MAIN O BODY-->
            </div>
          <!-- ////CONTENIDO DERECHO -->
          <!-- FOOTER -->
            <footer class="main-footer">
              <!-- To the right -->
              <div class="float-right d-none d-sm-inline">
                Gracias por tu visita
              </div>
              <!-- Default to the left -->
              <strong>Copyright &copy; 2023 <a href="">Servicios Disponibles</a>.</strong> Todos los derechos reservados.
            </footer>
          <!-- FOOTER -->  
        </div>
      <!-- ./wrapper -->
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
    </body>
  <!-- ////BODY -->
  </html>
<!-- ////HTML -->
