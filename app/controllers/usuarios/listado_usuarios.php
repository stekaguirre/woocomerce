
<!-- BUSCAR TODOS LOS USUARIOS -->
    <?php
    
        $sql_usuarios = "SELECT us.id_usuario as id_usuario , us.nombres as nombres ,
         us.email as email , us.descripcion as descripcion , rol.nombre as nombre  
         FROM usuarios as us INNER JOIN roles as rol ON us.id_rol = rol.id_rol ";
        $query_usuarios = $pdo->prepare($sql_usuarios);
        $query_usuarios->execute();
        $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
<!-- ////BUSCAR TODOS LOS USUARIOS -->