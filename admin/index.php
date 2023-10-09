
<!-- INCLUDE -->
<?php
  include ("../app/config.php");
  include ("../layout/session.php");
  include ("../layout/header.php");?>
<!-- ///INCLUDE -->

<!-- MENSAJE SWEETALERT -->
<?php
        
        
        if(isset($_SESSION['mensaje'])){
            $respuesta = $_SESSION['mensaje'];?>

            <script>
                    Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'hola <br><?php echo $_SESSION['session_email'];?><br> Bienvenido',
                showConfirmButton: false,
                timer: 1500
                })
            </script>

            <?php
            unset($_SESSION['mensaje']);
            }

            ?>
<!--/// MENSAJE SWEETALERT -->


<!-- ///CONTENIDO DERECHO HEADER -->
              <div class="content-wrapper">
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <h1 class="m-0">Admin - <?php echo APP_NAME; ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
<div class="content">
      <div class="content-fluid">  
        <h1>contenido</h1>
      </div>
    </div> 
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
            


  <?php include ("../layout/footer.php");?>

  



          
          
          