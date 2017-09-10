<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <!-- datatable español -->
    <script src="//cdn.datatables.net/plug-ins/1.10.16/i18n/German.json"></script>

</head>
<body>

<div class="container">
  <table id="users" class="table table-hover table-condensed" style="width:100%">
    <thead>
        <tr>
            <th>Archivo</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <tr>
    <td>Elemento1</td><td>Elemento2</td><td>Elemento3</td><td>Elemento4</td><td>Elemento5</td>
    </tr>
    </tbody>
  </table>
</div>

<script type="text/javascript">

$(document).ready(function() {
    oTable = $('#users').DataTable({

            "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"      
            }
    
    //Obtener datos para llenar la tabla   
/*
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getposts') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'category', name: 'category'},
            {data: 'tag', name: 'tag'}

        ]
  */
    });
});

</script>
</body>
</html>