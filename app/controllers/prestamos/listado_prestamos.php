
<!-- BUSCAR TODOS LOS PRESTAMOS -->
<?php
    
    $sql_prestamos = "SELECT * FROM prestamos";
    $query_prestamos = $pdo->prepare($sql_prestamos);
    $query_prestamos->execute();
    $prestamos_datos = $query_prestamos->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- ////BUSCAR TODOS LOS PRESTAMOS -->