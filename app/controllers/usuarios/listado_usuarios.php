
<!-- BUSCAR TODOS LOS USUARIOS -->
    <?php
    
        $sql_usuarios = "SELECT * FROM usuarios";
        $query_usuarios = $pdo->prepare($sql_usuarios);
        $query_usuarios->execute();
        $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
<!-- ////BUSCAR TODOS LOS USUARIOS -->