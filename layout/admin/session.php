<!-- SESSION -->
<?php
  session_start();
  if(isset($_SESSION['session_email'])){
   // echo "si existe la session de ".$_SESSION['session_email'];
   $email_session = $_SESSION['session_email'];

    
    $sql = "SELECT us.id_usuario as id_usuario , us.nombres as nombres ,
    us.email as email , us.descripcion as descripcion , rol.nombre as nombre  
    FROM usuarios as us INNER JOIN roles as rol ON us.id_rol = rol.id_rol 
    WHERE email = '$email_session'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    $contador = 0;
    foreach ( $usuarios as $usuario){
    $nombres_session = $usuario['nombres'];
    $rol_session = $usuario['nombre'];
  
  }

  }else{
    echo "no existe la session ....favor logearte";
    header('Location: '.$URL.'/login');
  }
  ?>
<!-- ////SESSION -->