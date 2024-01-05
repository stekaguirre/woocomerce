

<!--                                  USUARIOS CREATE                                            -->

<!-- INCLUDE -->
<?php
  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");
  include('../app/controllers/roles/update_roles.php');
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
                        <h1 class="m-0">Creacion de Usuarios <?php echo APP_NAME; ?></h1>
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
              <div class="card card-outline card-success">
                <div class="card-header">
                  <h1 class="card-title">editar rol en <?php echo APP_NAME; ?></h1>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                  </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="../app/controllers/roles/update.php" method="post">  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="id_rol" value="<?php echo $id_rol_get ?>"hidden>
                            <label for="">Nuevo rol<b>*</b> </label>
                            <input type="text" name="nombre" class="form-control"
                            placeholder="escriba su nuevo rol" value="<?php echo $nombre ?>" required >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <a href="<?php echo $URL; ?>/usuarios" class="btn btn-secondary">Atras</a>
                          <button type="submit" class="btn btn-success">actualizar</button>
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
            

<!-- CONTENIDO FOOTER Y MENSAJES -->
  <?php include ("../layout/admin/footer.php");
    include ("../layout/admin/mensajes.php");
  ?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->
  



          
          
          