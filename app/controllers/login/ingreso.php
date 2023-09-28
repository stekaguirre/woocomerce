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
}

$hash = $password_tabla;

if( ($contador>0) && (password_verify($password_user, $hash)) ){
    echo "Bienvenido a el sistema";
}else{
    echo "Error en los datos";
}

?>

