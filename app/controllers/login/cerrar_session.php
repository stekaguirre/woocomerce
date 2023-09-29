<!-- INCLUDE -->
<?php
  include ('../../config.php');
  ?>
<!-- ///INCLUDE -->
<!-- SESSION -->
  <?php
  session_start();
  if(isset($_SESSION['session_email'])){
    session_destroy();
    header('Location: '.$URL.'/');
  }
  ?>