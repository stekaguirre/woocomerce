<?php
$id_prestamo_get = $_GET['id'];
$sql_prestamos = "SELECT * FROM prestamos WHERE id_prestamo = '$id_prestamo_get'";
$query_prestamos = $pdo->prepare($sql_prestamos);
$query_prestamos->execute();
$prestamos_datos = $query_prestamos->fetchAll(PDO::FETCH_ASSOC);

foreach ($prestamos_datos as $prestamos_dato ){
    $id_prestamo_get = $prestamos_dato['id_prestamo'];
    $credito = $prestamos_dato['credito'];
    $interes = $prestamos_dato['interes'];
    $cuotas = $prestamos_dato['cuotas'];
    $importe_cuota = $prestamos_dato['importe_cuota'];
    $total = $prestamos_dato['total'];
    $fyh_creacion = $prestamos_dato['fyh_creacion'];
    $fyh_vencimiento = $prestamos_dato['fyh_vencimiento'];
    
    
}
?>