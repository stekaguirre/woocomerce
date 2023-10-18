

<!--                               USUARIOS UPDATE                           -->


<!-- INCLUDE -->
 <?php
  include ("../app/config.php");
  include ("../layout/session.php");
  include ("../layout/header.php");
  include ("../app/controllers/usuarios/update_usuarios.php");
  ?>
<!-- ///INCLUDE -->


<!-- ///CONTENIDO DERECHO HEADER -->
  <div class="content-wrapper">
  <br>
          <!--      
              <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <h1 class="m-0">Editar a el usuario <?php echo APP_NAME; ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
              -->
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
 <div class="content">
        <div class="content-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card card-success">
                <div class="card-header">
                  <h1 class="card-title">Estas a punto de editar la informacion de <?php echo $nombres;?></h1>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                  </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="../app/controllers/usuarios/update.php" method="post">
                      <input type="text" name="id_usuario" value="<?php echo $id_usuario_get ?>" hidden >
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Nombre y Apellido <b>*</b></label>
                            <input type="text" name="nombres" 
                            value="<?php echo $nombres;?>" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" name="email" 
                            value="<?php echo $email;?>" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="text" name="password_user" class="form-control" >
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
                            <label for="">Mensaje</label>
                            <input type="text" name="descripcion"  
                            value="<?php echo $descripcion;?>" 
                            cols="30" rows="5" class="form-control"></input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <a href="<?php echo $URL; ?>/usuarios" class="btn btn-secondary">Atras</a>
                          <button type="submit" class="btn btn-success">Actualizar</button>
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
            

  <?php include ("../layout/footer.php");
        include ("../layout/mensajes.php");
  ?>

  



          
          
          