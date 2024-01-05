

<!--                 CONTROLLERS ROLES CREATE                       -->

<!-- INCLUDE -->
<?php
    include ("../../config.php");
  ?>
<!-- ///INCLUDE -->

 <?php
    $nombre = $_POST['nombre'];
    

    $sentencia = $pdo->prepare("INSERT INTO roles
    ( nombre,fyh_creacion) 
    VALUES (:nombre,:fyh_creacion)");


    $sentencia->bindParam('nombre',$nombre);
    $sentencia->bindParam('fyh_creacion',$fechahora);

    if($sentencia->execute()){
    
    session_start();
      $_SESSION ['mensaje'] = "Se creo  el rol de la manera correcta";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/roles/');

      }else{
        session_start();
        $_SESSION ['mensaje'] = "Error creando el rol";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/roles/create.php');    
      };
 ?>