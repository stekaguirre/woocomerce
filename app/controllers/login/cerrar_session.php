<!-- INCLUDE -->
<?php
  include ('../../config.php');
  ?>
<!-- ///INCLUDE -->
<!-- SESSION -->
  <?php
  session_start();
  if(isset($_SESSION['sesion_email'])){
    session_destroy();
    header('Location: '.$URL.'/');
  }
  ?>