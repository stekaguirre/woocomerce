

<!--                               INDEX ADMINISTRACION                                            -->


<!-- INCLUDE -->
  <?php
  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");
  include ("../layout/admin/menu/lateral.php");
  include ("../app/controllers/usuarios/listado_usuarios.php");
  include ("../app/controllers/roles/listado_roles.php");
  ?>
<!-- ///INCLUDE -->
 
       
<!-- ///CONTENIDO DERECHO HEADER -->
              <div class="content-wrapper">
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <h1 class="m-0"><?php echo APP_NAME; ?> 
                                      - <?php echo $nombres_session; ?>
                                      - <?php echo $rol_session; ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
    <div class="content">
      <div class="content-fluid">  
        <h1>contenido</h1>
      <!-- CONTENIDO INFORMACION ARRIBA -->
        <div class="row">

        <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
        <div class="inner">
          <?php
          $contador_de_usuarios = 1;
          foreach ($usuarios_datos as $usuarios_dato){
            $contador_de_usuarios = $contador_de_usuarios + 1;
          }
          ?>
        <h3><?php echo $contador_de_usuarios ?></h3>
        <p>Usuarios Registrados</p>
        </div>
        
          <a href="<?php echo $URL;?>/usuarios/create.php">
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
          </a>
        
        <a href="<?php echo $URL;?>/usuarios" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
        <div class="inner">
          <?php
          $contador_de_roles = 1;
          foreach ($roles_datos as $roles_dato){
            $contador_de_roles = $contador_de_roles + 1;
          }
          ?>
        <h3><?php echo $contador_de_roles ?></h3>
        <p>Roles Registrados</p>
        </div>
        
          <a href="<?php echo $URL;?>/roles/create.php">
            <div class="icon">
              <i class="fas fa-address-card"></i>
            </div>
          </a>
        
        <a href="<?php echo $URL;?>/roles" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        </div>
      <!-- CONTENIDO INFORMACION ARRIBA -->
      <!-- CONTENIDO INFORMACION ABAJO -->
        <div class="row">
        <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
        <div class="inner">
        <h3>150</h3>
        <p>New Orders</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
        <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>
        <p>Bounce Rate</p>
        </div>
        <div class="icon">
        <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>


        <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
        <div class="inner">
        <h3>65</h3>
        <p>Unique Visitors</p>
        </div>
        <div class="icon">
        <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        </div>
      <!-- CONTENIDO INFORMACION ABAJO -->
      </div>
    </div> 
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
            

<!-- CONTENIDO FOOTER Y MENSAJES -->
  <?php 
    include ("../layout/admin/footer.php");
    include ("../layout/admin/mensajes.php");
  ?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->
  



          
          
          