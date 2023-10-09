<!-- SESSION -->
<?php
  session_start();
  if(isset($_SESSION['session_email'])){
   // echo "si existe la session de ".$_SESSION['session_email'];
   $email_session = $_SESSION['session_email'];

    
    $sql = "SELECT * FROM usuarios WHERE email = '$email_session'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    $contador = 0;
    foreach ( $usuarios as $usuario){
    $nombres_session = $usuario['nombres'];}

  }else{
    echo "no existe la session ....favor logearte";
    header('Location: '.$URL.'/login');
  }
  ?>
<!-- ////SESSION -->