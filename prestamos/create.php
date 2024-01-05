

<!--                                  USUARIOS CREATE                                            -->

<!-- INCLUDE -->
 <?php

  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");
  

  
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
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h1 class="card-title">crear prestamo <?php echo APP_NAME; ?></h1>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                  </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="../app/controllers/prestamos/create.php" method="post">
                    <input type="number" name="id_prestamo" value="<?php echo $id_prestamo_get ?>" hidden >
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">usuario <b>*</b> </label>
                            <input type="text" name="" class="form-control" disabled 
                            value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for=""># prestamo</label>
                            <input type="number" name="id_prestamo" class="form-control" disabled
                            value="<?php echo $id_prestamo_get;?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Credito</label>
                            <input type="number" name="credito" class="form-control" requerid>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">interes</label>
                            <input type="numbre" name="interes" class="form-control" requerid>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">cuotas</label>
                            <input type="number" name="cuotas" class="form-control" requerid>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">importe_cuota</label>
                            <input type="numbre" name="importe_cuota" class="form-control" requerid>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">total</label>
                            <input type="number" name="total" class="form-control" requerid>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">fecha de vencimiento</label>
                            <input type="date" name="fyh_vencimiento" class="form-control" requerid>
                          </div>
                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="col-md-12">
                          <a href="<?php echo $URL; ?>/prestamos" class="btn btn-secondary">Atras</a>
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
            

<!-- CONTENIDO FOOTER Y MENSAJES -->
  <?php include ("../layout/admin/footer.php");
    include ("../layout/admin/mensajes.php");
  ?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->
  



          
          
          