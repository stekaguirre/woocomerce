<?php

include ('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password_user = '$password_user' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
foreach ( $usuarios as $usuario){
 $contador = $contador + 1;
}

if ($contador>0) {
    echo "Bienvenido a el sistema";
}else{
    echo "Error en los datos";
}


