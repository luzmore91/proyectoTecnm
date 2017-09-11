<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
        <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <!-- datatable español -->
        <script src="//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"></script>

        <!-- Confirmacion de eliminacion de registros -->
        <script type="text/javascript" src="{{ URL::asset('js/confEliminar.js') }}"></script>

    </head>
    <body>

        <div class="container">
            <table id="users" class="table table-hover table-condensed" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre del proyecto</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->titulo }}</td>
                        <td>Elemento2</td>
                        <td>Elemento3</td>
                        <td align="center">

                        {{ Form::open(array('action' => array('AdminController@editar', $proyecto->idTecnologiaProyecto), 'method' => 'get')) }}
                            {{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                            </td>
                        <td>
                        <a href="#" onclick="eliminarProyecto()">
                        {{ Form::open(array('action' => array('AdminController@eliminar', $proyecto->idTecnologiaProyecto))) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </a>

                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script type="text/javascript">

            $(document).ready(function() {
                oTable = $('#users').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"      
                    },
                    //Obtener datos para llenar la tabla   
                        
                });
            });

        </script>
    </body>
</html>