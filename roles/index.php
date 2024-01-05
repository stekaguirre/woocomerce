

<!--                                     USUARIOS INDEX                                       -->

<!-- INCLUDE -->
 <?php
  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");
  include('../app/controllers/roles/listado_roles.php');?>
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
            <div class="col-md-8">
              <div class="card card-secondary">
                <div class="card-header ">
                  <h1 class="card-title ">Roles  <?php echo APP_NAME; ?></h1>
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
                      <th>Nro</th>
                      <th>Nombre</th>
                      <th>Aciones</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                          $contador = 0;
                          foreach ( $roles_datos as $roles_dato){
                            $id_rol = $roles_dato['id_rol'];
                            ?>
                            <tr>
                              <td><?php echo $contador = $contador + 1 ; ?></td>
                              <td><?php echo $roles_dato['nombre']; ?></td>
                              <td>
                               <div class="btn-group" role="group" aria-label="Basic example">
                                
                                <a href="update.php?id=<?php echo $id_rol ?>" 
                                type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i>Editar</a>
                                
                               </div>
                              </td>
                            </tr>
                          <?php  
                            }
                          ?>
                      </tbody>
                  <tfoot>
                  <tr>
                      <th>Nro</th>
                      <th>Nombre</th>
                      <th>Aciones</th>
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
                  "info": "Mostrando _START_ a _END_ de _TOTAL_ roles",
                  "infoEmpty": "Mostrando 0 a 0 de 0 roles",
                  "infoFiltered": "(Filtrado de _MAX_ total roles)",
                  "infoPostFix": "",
                  "thousands": ",",
                  "lengthMenu": "Mostrar _MENU_ roles",
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



          
          
          