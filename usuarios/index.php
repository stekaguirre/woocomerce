
<!-- INCLUDE -->
<?php
  include ("../app/config.php");
  include ("../layout/session.php");
  include ("../layout/header.php");
  include('../app/controllers/usuarios/listado_usuarios.php');?>
<!-- ///INCLUDE -->


<!-- ///CONTENIDO DERECHO HEADER -->
            <div class="content-wrapper">
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1 class="m-0">Listado de Usuarios - <?php echo APP_NAME; ?></h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $URL; ?>/login">Login</a></li>
                            <li class="breadcrumb-item active">Listado de Usuarios</li>
                        </ol>
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
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Todos los Usuarios</h3>
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
                        <th>Cargo</th>
                        <th>Aciones</th>
                      </tr>
                      <tbody>
                        <?php
                          foreach ( $usuarios_datos as $usuarios_dato){?>
                            <tr>
                              <td><?php echo $usuarios_dato['id_usuario']; ?></td>
                              <td><?php echo $usuarios_dato['nombres']; ?></td>
                              <td><?php echo $usuarios_dato['email']; ?></td>
                              <td><?php echo $usuarios_dato['cargo']; ?></td>
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

  



          
          
          