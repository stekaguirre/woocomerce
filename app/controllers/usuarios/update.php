

<!--                       CONTROLLERS USUARIOS UPDATE                       -->

<!-- INCLUDE -->
<?php
    include ("../../config.php");
?>
<!--// INCLUDE -->


<?php

    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $password_user = $_POST['password_user'];
    $password_repeat = $_POST['password_repeat'];
    $descripcion = $_POST['descripcion'];
    $id_usuario = $_POST['id_usuario'];


    if($password_user == ""){
        if($password_user == $password_repeat){
            $password_user = password_hash($password_user, PASSWORD_DEFAULT);
            $sentencia = $pdo->prepare("UPDATE usuarios
        SET nombres=:nombres,
            email=:email,
            descripcion=:descripcion,
            fyh_actualizacion=:fyh_actualizacion 
        WHERE id_usuario = :id_usuario ");

            $sentencia->bindParam('nombres',$nombres);
            $sentencia->bindParam('email',$email);
            $sentencia->bindParam('descripcion',$descripcion);
            $sentencia->bindParam('fyh_actualizacion',$fechahora);
            $sentencia->bindParam('id_usuario',$id_usuario);
            $sentencia->execute();
            session_start();
            $_SESSION['mensaje'] = "Se actualizo al usuario de la manera correcta";
            $_SESSION['icono'] = "success";
            header('Location: '.$URL.'/usuarios/');

        }else{
            // echo "error las contraseñas no son iguales";
            session_start();
            $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario);
        }

    }else{
        if($password_user == $password_repeat){
            $password_user = password_hash($password_user, PASSWORD_DEFAULT);
            $sentencia = $pdo->prepare("UPDATE usuarios
        SET nombres=:nombres,
            email=:email,
            password_user=:password_user,
            descripcion=:descripcion,
            fyh_actualizacion=:fyh_actualizacion 
        WHERE id_usuario = :id_usuario ");

            $sentencia->bindParam('nombres',$nombres);
            $sentencia->bindParam('email',$email);
            $sentencia->bindParam('password_user',$password_user);
            $sentencia->bindParam('descripcion',$descripcion);
            $sentencia->bindParam('fyh_actualizacion',$fechahora);
            $sentencia->bindParam('id_usuario',$id_usuario);
            $sentencia->execute();
            session_start();
            $_SESSION['mensaje'] = "Se actualizo al usuario de la manera correcta";
            $_SESSION['icono'] = "success";
            header('Location: '.$URL.'/usuarios/');

        }else{
            // echo "error las contraseñas no son iguales";
            session_start();
            $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario);
        }

    }
?>

