

<!--                         CONTROLLERS LOGIN CERRAR SESSION                       -->

<!-- INCLUDE -->
  <?php
  include ('../../config.php');
  ?>
<!-- ///INCLUDE -->



  <?php
    session_start();
    if(isset($_SESSION['session_email'])){
      session_destroy();
      header('Location: '.$URL.'/');
    }
  ?>