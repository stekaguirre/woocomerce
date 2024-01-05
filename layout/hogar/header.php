<!DOCTYPE html>
<html lang="es">
  <!-- HEAD -->  
    <head>
      <title> Hogar | Paginas | Servicios disponibles</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="<?php echo $URL;?>/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
  <!-- ///HEAD -->
<body id="top">
<!-- IMAGEN DE FONDO  MENU DE NAVEGACION Y BIENVENIDA -->
  <div class="bgded overlay" style="background-image:url('<?php echo $URL;?>/public/images/hogar/hogar.jpg');"> 
    <!-- TITULO Y LOGO -->
      <div class="wrapper row0">
        <header id="header" class="hoc clear center"> 
          <h1 id="logo"><img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logotienda"> <br> 
            <b>Hogar</b></h1>
        </header>
      </div>
    <!-- ///TITULO Y LOGO -->
    <!-- MENU DE NAVEGACION -->
      <div class="wrapper row1">
        <nav id="mainav" class="hoc clear"> 
          <ul class="clear">
            <li class="active"><a href="<?php echo $URL;?>/index.php">Home</a></li>
            <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Servicios streaming</a></li>
            <li><a href="<?php echo $URL;?>/paginas/web/index.php">Servicios  Web</a></li>
            <li><a href="<?php echo $URL;?>/font-icons.html">iconos</a></li>
            <li><a class="drop" href="#">Proximamente</a>
              <ul>
                <li><a href="<?php echo $URL;?>/paginas/hogar/index.php">Servicio Hogar</a></li>
                <li><a href="<?php echo $URL;?>/paginas/tienda/index.php">Servicio tienda</a></li>
                <li><a href="<?php echo $URL;?>/paginas/personal/index.php">Servicio aseo personal</a></li>
              </ul>
            </li>
            <!-- BOTON INGRESAR -->
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?php echo $URL;?>/login" 
                  class="nav-link">Login</a>
                </li>
            <!-- ///BOTON INGRESAR --> 
          </ul>
        </nav>
      </div>
    <!-- ///MENU DE NAVEGACION -->
  </div>
<!-- //IMAGEN DE FONDO MENU DE NAVEGACION Y BIENVENIDA -->