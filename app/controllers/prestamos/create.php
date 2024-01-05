

<!--                 CONTROLLERS USUARIOS CREATE                       -->

<!-- INCLUDE -->
<?php
    include ("../../config.php");
  ?>
<!-- ///INCLUDE -->

 <?php
    $id_prestamo_get = $_POST['id_prestamo'];
    $credito = $_POST['credito'];
    $interes = $_POST['interes'];
    $cuotas = $_POST['cuotas'];
    $importe_cuota = $_POST['importe_cuota'];
    $total = $_POST['total'];
    $fyh_vencimiento = $_POST['fyh_vencimiento'];
    

    $sentencia = $pdo->prepare("INSERT INTO prestamos
    (  credito, interes, cuotas, importe_cuota, total, fyh_creacion, fyh_vencimiento) 
    VALUES (:credito,:interes,:cuotas,:importe_cuota,:total,:fyh_creacion, :fyh_vencimiento)");

    $sentencia->bindParam('credito',$credito);
    $sentencia->bindParam('interes',$interes);
    $sentencia->bindParam('cuotas',$cuotas);
    $sentencia->bindParam('importe_cuota',$importe_cuota);
    $sentencia->bindParam('total',$total);
    $sentencia->bindParam('fyh_creacion',$fechahora);
    $sentencia->bindParam('fyh_vencimiento',$fyh_vencimiento);



    if($sentencia->execute()){
    
    session_start();
      $_SESSION ['mensaje'] = "Se creo  el prestamo de la manera correcta";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/prestamos/');

      }else{
        session_start();
        $_SESSION ['mensaje'] = "Error creando el prestamo";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/prestamos/create.php');    
      };
 ?>