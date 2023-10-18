

<!--                         CONTROLLERS LOGIN INGRESO                       -->



<?php

    include ('../../config.php');

    $email = $_POST['email'];
    $password_user = $_POST['password_user'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    $contador = 0;
    foreach ( $usuarios as $usuario){
    $contador = $contador + 1;
    $password_tabla = $usuario['password_user'];
    $nombres = $usuario['nombres'];
    }

    $hash = $password_tabla;

    if( ($contador>0) && (password_verify($password_user, $hash)) ){
        session_start();
        $_SESSION['session_email'] = $email;  
        $_SESSION['mensaje'] = "bienvenido al sistema";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/admin');
    }else{
        session_start();
        $_SESSION['mensaje'] = 'datos incorrectos';
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/login');
    }


?>


