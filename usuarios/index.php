
<!-- INCLUDE -->
<?php
  include ("../app/config.php");
  include ("../layout/session.php");
  include ("../layout/header.php");
  include('../app/controllers/usuarios/listado_usuarios.php');?>
<!-- ///INCLUDE -->

<!-- MENSAJE SWEETALERT -->
 <?php
        if(isset($_SESSION['mensaje'])){
            $respuesta = $_SESSION['mensaje'];?>

            <script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '<?php echo $respuesta ?>',
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
                        <h1 class="m-0">Listado de Usuarios - <?php echo APP_NAME; ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
      <div class="content">
        <div class="content-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card card-outline card-primary">
                <div class="card-header ">
                  <h3 class="card-title ">Todos los Usuarios</h3>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                  </div>

                  </div>

                  <div class="card-body" style="display: block;">
                    <table class="table table-bordered table-hover table-striped table-sm text-center">
                      <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>descripcion</th>
                        <th>Aciones</th>
                      </tr>
                      <tbody>
                        <?php
                          $contador = 0;
                          foreach ( $usuarios_datos as $usuarios_dato){?>
                            <tr>
                              <td><?php echo $contador = $contador + 1 ; ?></td>
                              <td><?php echo $usuarios_dato['nombres']; ?></td>
                              <td><?php echo $usuarios_dato['email']; ?></td>
                              <td><?php echo $usuarios_dato['descripcion']; ?></td>
                              <td>
                               <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-info">Ver</button>
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Borrar</button>
                               </div>
                              </td>
                            </tr>
                          <?php  
                            }
                          ?>
                      </tbody>                                                            
                    </table>
                 </div>

              </div>
            </div>
          </div>
        </div>
      </div>
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
            


<?php include ("../layout/footer.php");?>

  



          
          
          