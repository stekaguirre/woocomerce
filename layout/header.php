<!DOCTYPE html>
<!-- HTML -->
  <html lang="es">
  <!-- HEAD -->
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo APP_NAME;?></title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" 
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" 
      href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" 
      href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
      <!-- LIBRERIA DE SWEETALERT -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
  <!-- ////HEAD -->
  <!-- BODY -->
    <body class="hold-transition sidebar-mini">
    <!-- MENSAJE SWEETALERT -->
        <script>
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'hola <br><?php echo $_SESSION['session_email'];?><br> Bienvenido',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
    <!-- /////MENSAJE SWEETALER -->  
    <!-- wrapper --> 
            <div class="wrapper">
            <!-- MENU DE NAVEGACION DERECHA -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- CABEZERA DERECHA TITULO -->
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" 
                        href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <h2><?php echo APP_NAME; ?></h2>
                    </li>
                    </ul>
                <!-- ///CABEZERA DERECHA TITULO -->

                <!-- CABEZERA DERECHA LINK -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" 
                        href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" 
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                    </ul>
                <!-- ////CABEZERA DERECHA LINK -->  
                </nav>
            <!-- //// MENU DE NAVEGACION DERECHA-->

            <!-- MENU DE NAVEGACION IZQUIERDA -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <!-- LOGO Y NOMBRE DE PAGINA -->
                    <a href="#" class="brand-link">
                        <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="AdminLTE Logo" 
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light"><?php echo APP_NAME;?></span>
                    </a>
                <!-- ///LOGO Y NOMBRE DE PAGINA -->
    
                <!-- INFO Y FOTO DE PERFIL -->
                    <div class="sidebar"> 
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                        <img src="<?php echo $URL;?>/public/images/fotostek.jpg" 
                        class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                        <a href="#" class="d-block">
                        <b><?php echo $nombres_session;?></b>
                        </a>
                        </div>
                    </div>
                <!--//// INFO Y FOTO DE PERFIL -->

                <!-- MENU CON MIS PAGINAS -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" 
                        role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/" class="nav-link active" >
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Inicio
                            </p>
                            </a>
                        </li>
                            
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/admin" 
                            class="nav-link active" >
                            <i class="nav-icon fas fa-docs"></i>
                            <p>
                                Admin
                            </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Usuarios
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/usuarios" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listado de usuarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link active">
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
                            <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_session.php" class="nav-link active" style="background-color:red">
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
        
    <!--//// wrapper -->