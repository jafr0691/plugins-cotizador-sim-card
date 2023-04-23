        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tablero
            <small>Usa Alo</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="index.html">Tablero</a></li>
            <li class="active">User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Usuarios</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NOMBRE</th>
                        <th>USER</th>
                        <th>ROL</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NOMBRE</th>
                        <th>USER</th>
                        <th>ROL</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
         <script type="text/javascript">
      $(function () {
        // $("#example1").dataTable();
        $('#example1').dataTable({
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "lengthMenu": "Mostrar _MENU_ Planes",
                "zeroRecords": "No se encontraron resultados",
                "info": "Planes de _START_ al _END_ de un total de _TOTAL_",
                "infoEmpty": "Planes de 0 al 0 de un total de 0 Registrados",
                "infoFiltered": "(filtrado de un total de _MAX_ Planes)",
                "Search": "Nombre:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
            // searching: false,

        });
      });
    </script>