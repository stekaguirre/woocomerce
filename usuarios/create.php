
<!-- INCLUDE -->
<?php
  include ("../app/config.php");
  include ("../layout/session.php");
  include ("../layout/header.php");
  ?>
<!-- ///INCLUDE -->

<!-- MENSAJE SWEETALERT -->
      <?php
        if(isset($_SESSION['mensaje'])){
            $respuesta = $_SESSION['mensaje'];?>

            <script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'error',
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
                        <h1 class="m-0">Creacion de Usuarios - <?php echo APP_NAME; ?></h1>
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
                <div class="card-header">
                  <h3 class="card-title">Datos del Usuario</h3>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                  </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="../app/controllers/usuarios/create.php" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Nombre y Apellido</label>
                            <input type="text" name="nombres" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="text" name="password_user" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Verifica la Contraseña</label>
                            <input type="text" name="password_repeat" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Cargo</label>
                            <select name="cargo" id="" class="form-control">
                              <option value="Administrador">Administrador</option>
                              <option value="Vendedor">Vendedor</option>
                              <option value="Cliente">Cliente</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <a href="<?php echo $URL; ?>/usuarios" class="btn btn-secondary">Cancelar</a>
                          <input type="submit" class="btn btn-primary">
                        </div>
                      </div>

                    </form>
                   
                 </div>

              </div>
            </div>
          </div>
        </div>
      </div>
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
            


  <?php include ("../layout/footer.php");?>

  



          
          
          