

<!--                                     USUARIOS INDEX                                       -->

<!-- INCLUDE -->
 <?php
  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");
  include('../app/controllers/prestamos/listado_prestamos.php');?>
<!-- ///INCLUDE -->

<!-- ///CONTENIDO DERECHO HEADER -->
            <div class="content-wrapper">
            <br>
          <!--      
              <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <h1 class="m-0">Todos los Usuarios <?php echo APP_NAME; ?></h1>
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
            <div class="col-md-12">
              <div class="card card-secondary">
                <div class="card-header ">
                  <h1 class="card-title ">Todos los prestamos  <?php echo APP_NAME; ?></h1>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">          
                <table id="example1" class="table table-bordered table-striped table-sm text-center ">
                  <thead>
                  <tr>
                      <th>usuario</th>
                      <th>#prestamo</th>
                      <th>credito</th>
                      <th>interes</th>
                      <th>cuotas</th>
                      <th>importe cuota</th>
                      <th>total a pagar</th>
                      <th>fecha de vencimiento</th>
                      <th>aciones</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                          $contador = 0;
                          foreach ( $prestamos_datos as $prestamos_dato){
                            $id_prestamo = $prestamos_dato['id_prestamo'];
                            ?>
                            <tr>
                              <td><?php echo $contador = $contador + 1 ; ?></td>
                              <td><?php echo $prestamos_dato['id_prestamo']; ?></td>
                              <td><?php echo $prestamos_dato['credito']; ?></td>
                              <td><?php echo $prestamos_dato['interes']; ?></td>
                              <td><?php echo $prestamos_dato['cuotas']; ?></td>
                              <td><?php echo $prestamos_dato['importe_cuota']; ?></td>
                              <td><?php echo $prestamos_dato['total']; ?></td>
                              <td><?php echo $prestamos_dato['fyh_vencimiento']; ?></td>
                              <td>
                               <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="show.php?id=<?php echo $id_prestamo ?>" type="button" class="btn btn-primary"><i class="bi bi-eye-fill"></i>Ver</a>
                                <a href="update.php?id=<?php echo $id_prestamo ?>" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i>Editar</a>
                                <a href="delete.php?id=<?php echo $id_prestamo ?>" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i>Eliminar</a>
                               </div>
                              </td>
                            </tr>
                          <?php  
                            }
                          ?>
                      </tbody>
                  <tfoot>
                  <tr>
                      <th>usuario</th>
                      <th>#prestamo</th>
                      <th>credito</th>
                      <th>interes</th>
                      <th>cuotas</th>
                      <th>importe cuota</th>
                      <th>total a pagar</th>
                      <th>fecha vencimiento</th>
                      <th>aciones</th>
                  </tr>
                  </tfoot>
                </table>
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

<!-- SCRIPT DE DATATABLE-->
  <script>
      $(function () {
          $("#example1").DataTable({
              "pageLength": 5,
              "language": {
                  "emptyTable": "No hay información",
                  "info": "Mostrando _START_ a _END_ de _TOTAL_ Prestamos",
                  "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                  "infoFiltered": "(Filtrado de _MAX_ total Prestamos)",
                  "infoPostFix": "",
                  "thousands": ",",
                  "lengthMenu": "Mostrar _MENU_ Prestamos",
                  "loadingRecords": "Cargando...",
                  "processing": "Procesando...",
                  "search": "Buscador:",
                  "zeroRecords": "Sin resultados encontrados",
                  "paginate": {
                      "first": "Primero",
                      "last": "Ultimo",
                      "next": "Siguiente",
                      "previous": "Anterior"
                  }
              },
              "responsive": true, "lengthChange": true, "autoWidth": false,
              buttons: [{
                  extend: 'collection',
                  text: 'Reportes',
                  orientation: 'landscape',
                  buttons: [
                    {text: 'Copiar',extend: 'copy'}, 
                    {extend: 'pdf'},
                    {extend: 'csv'},
                    {extend: 'excel'},
                    {text: 'Imprimir',extend: 'print'}
                  ]
              },
                  {
                      extend: 'colvis',
                      text: 'Visor de columnas',
                      collectionLayout: 'fixed one-column',
                  }
              ],
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
  </script>
<!-- ///SCRIPT DE DATATABLE-->



          
          
          