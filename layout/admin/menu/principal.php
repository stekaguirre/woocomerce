
<!-- MENU DE NAVEGACION PRINCIPAL ADMIN -->                    
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!--MENU DE NAVEGACION PRINCIPAL LADO IZQUIERDO LINKS -->  
      <ul class="navbar-nav">
        <!-- BOTON PUSH-MENU  -->  
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" 
              href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        <!-- ///BOTON PUSH-MENU  -->
        <!-- BOTON HOME  -->
          <li class="nav-item d-sm-inline-block">
              <a href="<?php echo $URL; ?>/" 
              class="nav-link"><i class="nav-icon fas fa-home"></i></a>   
          </li>
        <!-- ///BOTON HOME -->
        <!-- BOTON USUARIOS -->
          <li class="nav-item d-sm-inline-block">
              <a href="<?php echo $URL; ?>/usuarios" 
              class="nav-link"><i class="nav-icon fas fa-users"></i></a>
          </li>
        <!-- ///BOTON USUARIOS -->
        <!-- BOTON ROLES -->
          <li class="nav-item d-sm-inline-block">
              <a href="<?php echo $URL; ?>/roles" 
              class="nav-link"><i class="nav-icon fas fa-address-card"></i></a>
          </li>
        <!-- ///BOTON ROLES -->
        <!-- BOTON PRESTAMOS -->
          <li class="nav-item d-sm-inline-block">
              <a href="<?php echo $URL; ?>/prestamos" 
              class="nav-link"><i class="nav-icon fas fa-coins"></i></a>
          </li>
        <!-- ///BOTON PRESTAMOS -->
        <!-- BOTON ADMIN -->
          <li class="nav-item  d-sm-inline-block">
              <a href="<?php echo $URL; ?>/admin" 
              class="nav-link"><i class="nav-icon fas fa-user-tie"></i></a>
          </li>
        <!-- ///BOTON ADMIN -->
      </ul>
    <!--MENU DE NAVEGACION PRINCIPAL LADO IZQUIERDO LINKS -->  
    <!--MENU DE NAVEGACION PRINCIPAL LADO DERECHO LINKS -->
      <ul class="navbar-nav ml-auto">
        <!-- BOTON INGRESAR 
            <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo $URL; ?>/login" 
              class="nav-link"><i class="nav-icon fas fa-handshake"></i></a>
            </li>
        BOTON INGRESAR -->
        <!-- BOTON SALIR -->
            <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_session.php" 
              class="nav-link"><i class="nav-icon fas fa-power-off"></i></a>
            </li>
        <!--//// BOTON SALIR -->
      </ul>
    <!--MENU DE NAVEGACION PRINCIPAL LADO DERECHO LINKS -->
  </nav>
<!-- MENU DE NAVEGACION PRINCIPAL ADMIN-->