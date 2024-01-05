

<!--                      CONTROLLERS USUARIOS UPDATE_USUARIOS                   -->

<?php
$id_rol_get = $_GET['id'];
$sql_roles = "SELECT * FROM roles WHERE id_rol = '$id_rol_get'";
$query_roles = $pdo->prepare($sql_roles);
$query_roles->execute();
$roles_datos = $query_roles->fetchAll(PDO::FETCH_ASSOC);

foreach ($roles_datos as $roles_dato ){
    $nombre = $roles_dato['nombre'];
    
}
?>