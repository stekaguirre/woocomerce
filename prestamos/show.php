

<!--                                  USUARIOS SHOW                                    -->

<!-- INCLUDE -->
 <?php
  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");
  include ("../app/controllers/prestamos/show.php");
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
                        <h1 class="m-0">Vista de el usuario <?php echo APP_NAME; ?></h1>
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
            <!-- CONTENIDO CARD -->
              <div class="card card-primary">
                <!-- CONTENIDO CARD HEADER -->
                  <div class="card-header">
                    <h1 class="card-title">prestamo numero<?php echo $id_prestamo_get;?></h1>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                      class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                <!--/// CONTENIDO CARD HEADER -->
                  <!-- CONTENIDO CARD BODY -->
                    <div class="card-body" style="display: block;">
                    <input type="number" name="id_prestamo" value="<?php echo $id_prestamo_get ?>" hidden >
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">credito</label>
                              <input type="number" name="credito" 
                              value="<?php echo $credito;?>" class="form-control" disabled >
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="">interes</label>
                              <input type="number" name="interes" 
                              value="<?php echo $interes;?>" class="form-control" disabled >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">cuotas</label>
                              <input type="number" name="cuotas" 
                              value="<?php echo $cuotas;?>" class="form-control" disabled >
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="">importe_cuota</label>
                              <input type="number" name="importe_cuota" 
                              value="<?php echo $importe_cuota;?>" class="form-control" disabled >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">total</label>
                              <input type="number" name="total"  
                              value="<?php echo $total;?>" disabled 
                              class="form-control"></input>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="">fecha de creacion</label>
                              <input type="datetime" name="fyh_creacion"  
                              value="<?php echo $fyh_creacion;?>" disabled 
                              class="form-control"></input>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">fecha de vencimiento</label>
                              <input type="datetime" name="fyh_vencimiento"  
                              value="<?php echo $fyh_vencimiento;?>" disabled 
                              class="form-control"></input>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12">
                              <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="index.php" type="button" class="btn btn-secondary">Atras</a>
                              </div>
                          </div>
                        </div>
                    </div>
                  <!--/// CONTENIDO CARD BODY -->
              </div>
            <!--/// CONTENIDO CARD -->
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
  



          
          
          