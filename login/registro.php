<?php
include ("../app/config.php")
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registro - <?php echo APP_NAME; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <!-- Libreria Sweetallert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
        <div class="card-header text-center">
            <a href="index.html" class="h1"><b>Sistema de ventas</b></a>
        </div>
        <div class="card card-outline card-primary">
            <center>
                <img src="<?php echo $URL;?>/public/images/logotienda.png"
                alt="logotienda" width="100px">
            </center>
        <div class="card-body">
            <p class="login-box-msg"><b>Registrarse en el sistema</b></p>
            
        <!-- FORMULARIO DE REGISTRO -->    
            <form action="<?php echo $URL;?>/app/controllers/usuarios/create.php" method="post">
                <!-- BOTON NOMBRES -->
                    <div class="input-group mb-3">
                        <input type="text" name="nombres" 
                        class="form-control" placeholder="Nombres" require >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                <!-- ////BOTON NOMBRES -->
                <!-- BOTON EMAIL -->
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                <!-- ////BOTON EMAIL -->
                <!-- BOTON CONTRASEÑA -->
                    <div class="input-group mb-3">
                        <input type="text" name="password_user" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                <!-- ////BOTON CONTRASEÑA -->
                <!-- BOTON REPITA CONTRASEÑA -->
                    <div class="input-group mb-3">
                        <input type="text" name="password_repeat" class="form-control" placeholder="repita la contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                <!-- ///BOTON REPITA CONTRASEÑA -->
               <!-- MENSAJE -->
                    <div class="input-group mb-3">
                        <textarea name="descripcion" id="descripcion" placeholder="mensaje"
                        cols="2" rows="1" class="form-control"></textarea>  
                    </div>
               <!-- MENSAJE -->
                <!-- BOTON REGISTRO --> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </div>  
                    </div>
                <!-- ////BOTON REGISTRO -->
                <!-- IR A INGRESO -->
                    <div class="row">
                        <div class="col-12">
                            <center><p>Si ya estas registrado ??</p></center>
                            <a href="<?php echo $URL;?>/login" class="btn btn-secondary btn-block">Ingreso</a>
                        </div>  
                    </div>
                <!-- ////IR A INGRESO -->
            </form>
        <!-- ///FORMULARIO DE REGISTRO -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>

<!-- CONTENIDO FOOTER Y MENSAJES -->
<?php 
    include ("../layout/mensajes.php");
  ?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->