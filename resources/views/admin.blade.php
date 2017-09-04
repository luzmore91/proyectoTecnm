<html>
    <head>
        <title>Tecnologico de mexico</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/form.css') }}" rel="stylesheet" type="text/css">
         <link href="{{ asset('/css/format.css') }}" rel="stylesheet" type="text/css">
         <link href="{{ asset('/css/ie.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            @include('header')
        </div>

        <!-- tabla de admin -->
        <div class="container">
        <h2>Modulo administrativo</h2>
            <div class="col-xs-12" style="padding-bottom:50px">
                   <table class="table table-striped table-hover sortable">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Archivo</th>
                                <th style="text-align: center;">Descripción</th>
                                <th style="text-align: center;">Tipo</th>
                                <th style="text-align: center;" class="sorttable_nosort">Actualizar</th>
                                <th style="text-align: center;" class="sorttable_nosort">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre del archivo 1</td>
                                <td class="text-center">Temas y objetivos del archivo</td>
                                <td class="text-center">PDF</td>
                                <td class="text-center"><span class="glyphicon glyphicon-pencil"></span></td>
                                <td class="text-center"><span class="glyphicon glyphicon-remove"></span></td>
                            </tr>
                            <tr>
                                <td>Nombre del archivo 2</td>
                                <td class="text-center">Temas y objetivos del archivo</td>
                                <td class="text-center">Word</td>
                                <td class="text-center"><span class="glyphicon glyphicon-pencil"></span></td>
                                <td class="text-center"><span class="glyphicon glyphicon-remove"></span></td>
                            </tr>
                            <tr>
                                <td>Nombre del archivo 3</td>
                                <td class="text-center">Temas y objetivos del archivo</td>
                                <td class="text-center">PowerPoint</td>
                                <td class="text-center"><span class="glyphicon glyphicon-pencil"></span></td>
                                <td class="text-center"><span class="glyphicon glyphicon-remove"></span></td>
                            </tr>
                            <tr>
                                <td>Nombre del archivo 4</td>
                                <td class="text-center">Temas y objetivos del archivo</td>
                                <td class="text-center">Word</td>
                                <td class="text-center"><span class="glyphicon glyphicon-pencil"></span></td>
                                <td class="text-center"><span class="glyphicon glyphicon-remove"></span></td>
                            </tr>
                            <tr>
                                <td>Nombre del archivo 5</td>
                                <td class="text-center">Temas y objetivos del archivo</td>
                                <td class="text-center">PowerPoint</td>
                                <td class="text-center"><span class="glyphicon glyphicon-pencil"></span></td>
                                <td class="text-center"><span class="glyphicon glyphicon-remove"></span></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="container">
            @include('footer')
        </div>
    </body>

    <!-- Select -->
    <script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/codigoSelect.js') }}"></script>

</html>
