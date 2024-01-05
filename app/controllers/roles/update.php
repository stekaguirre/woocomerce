

<!--                       CONTROLLERS USUARIOS UPDATE                       -->

<!-- INCLUDE -->
<?php
    include ("../../config.php");
?>
<!--// INCLUDE -->


<?php
    $id_rol = $_POST['id_rol'];
    $nombre = $_POST['nombre'];
    
    


            $sentencia = $pdo->prepare("UPDATE roles
        SET nombre=:nombre,
            fyh_actualizacion=:fyh_actualizacion 
        WHERE id_rol = :id_rol ");

            
            $sentencia->bindParam('nombre',$nombre);
            $sentencia->bindParam('fyh_actualizacion',$fechahora);
            $sentencia->bindParam('id_rol',$id_rol);
           
            
            if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Se actualizo el rol de la manera correcta";
            $_SESSION['icono'] = "success";
            header('Location: '.$URL.'/roles/');

       }else{

        // echo "error las contraseñas no son iguales";
            session_start();
            $_SESSION['mensaje'] = "error no se pudo actualizar";
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/roles/update.php?id='.$id_rol);

       }



            
    
?>

