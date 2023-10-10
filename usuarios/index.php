
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
              <div class="card card-secondary">
                <div class="card-header ">
                  <h3 class="card-title ">Todos los Usuarios</h3>
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
                      <th>Email</th>
                      <th>descripcion</th>
                      <th>Aciones</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                          $contador = 0;
                          foreach ( $usuarios_datos as $usuarios_dato){
                            $id_usuario = $usuarios_dato['id_usuario'];
                            ?>
                            <tr>
                              <td><?php echo $contador = $contador + 1 ; ?></td>
                              <td><?php echo $usuarios_dato['nombres']; ?></td>
                              <td><?php echo $usuarios_dato['email']; ?></td>
                              <td><?php echo $usuarios_dato['descripcion']; ?></td>
                              <td>
                               <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="show.php?id=<?php echo $id_usuario ?>" type="button" class="btn btn-primary"><i class="bi bi-eye-fill"></i>Ver</a>
                                <a href="update.php?id=<?php echo $id_usuario ?>" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i>Editar</a>
                                <a href="delete.php?id=<?php echo $id_usuario ?>" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i>Borrar</a>
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
                      <th>Email</th>
                      <th>descripcion</th>
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
            

<?php include ("../layout/footer.php");?>

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
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




          
          
          