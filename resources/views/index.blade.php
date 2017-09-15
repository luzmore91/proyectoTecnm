<html>
    <head>
        <title>convocatoria INADEM</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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

        {!! Form::open(array('action' => 'inademController@insertar')) !!}


            <!--Tecnologia o Proyecto y Equipo Emprendedor o Inventor-->
            <div class="container">
                @include('tecnologiaEquipoEmprendedor')
            </div>
            <!--Estado de proyecto, sector estrategico , propiedad intelectual y lo que persigue el proyecto-->
            <div class="container">
                @include('estadoProyecto')
            </div>
            <div class="container">
                @include('colaboracionIES')
            </div>
            <div class="container">
                @include('recursosAplicacion')
            </div>
            
            
            <div class="container" style="padding-bottom:60px">


                <div class="row col-xs-12" id="botones">
                    <div class="col-xs-6">

         
      <!--- data-toggle="modal" data-target="#ModalLoginForm" -->
        <button  type="submit" class="btn btn-success btn-lg" style="left: 80%;position: relative;" >
          <span class="glyphicon glyphicon-ok"></span> Aceptar 
        </button>

                       
<!-- Modal HTML Markup -->
<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="alertdialog" style="left:0%">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Registro</h1>
            </div>
            <div class="modal-body">
               Almacenamiento de información exitosa
            </div>
             <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                    </div>

                    <div class="col-xs-6">
                    
       <button class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-remove"></span> Cancelar 
        </button>

                    </div>
                </div>
            </div>

        {!! Form::close() !!}

        <div class="container">
            @include('footer')
        </div>





    </body>

    <!-- Select -->

    <script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/codigoSelect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/popOver.js') }}"></script>
       <script type="text/javascript">
     $(document).ready(function(){

      $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

<<<<<<< HEAD
         var tokenInadem = generar();
=======

function generar()
{
  var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
  var contraseña = "";
  for (i=0; i<100; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
  return contraseña;
}

function guardarToken(clave){
    console.log("entrar a AJAX");
     $.ajax({
        url:'tokenInademApp',
        type: 'POST',
        dataType: 'json',
        data:{llave:clave},
        success: function(success) {
            console.log("Sent valores insertados "+success);


      },
error: function(response){
    console.log('Error'+response);
    }
    });
}



        var tokenInadem = generar();
>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299
         guardarToken(tokenInadem);
     });
               </script>
    <script type="text/javascript" src="{{ asset('/js/tableMembers.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sorttable.js') }}"></script>


</html>
