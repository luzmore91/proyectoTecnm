<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Tecnologia;
use App\Institucion;
use App\Proyecto;
use App\PropiedadIntelectual;
use App\AnalisisEntorno;
use App\ObjetivoProyecto;
use App\Colaboracion;
use App\EquipoEmprendedor;
use App\Participante;
use App\Riesgos;
use Log;


class inademController extends Controller
{

     protected $participante;
 ///funcion que obtiene el contenido de la tabla



    
    ///desplegar vista desde el controlador 
    public function ver()
    { /// Consulta los catalogos de la BD 

        
      ///////////PARTE 0///////////
        //--- catalogo Institucion---//
        $institucion = DB::select('select * from institucion');
        //--- catalogo TipoInvencion---//
        $inv = DB::select('select * from tipoinvencion');

       ///////////PARTE 1///////////
        //--- catalogo gradoEstudios---//
        $gradoEstudios = DB::select('select * from tipoGradoEstudios');
        //--- catalogo areaConocimiento---//
        $areaConocimiento = DB::select('select * from areaConocimiento'); 
        
          ///////////PARTE 2 y 3///////////
        //--- catalogo TRL---//
        $TRL = DB::select('select * from TRL');
        //--- catalogo Sector---//
        $sector = DB::select('select * from tipoSector');
        
         ///////////PARTE 4 y 5///////////
        //--- catalogo propiedad intelectual---//
        $propInt = DB::select('select * from tipoPropiedadIntelectual');
        //--- catalogo propiedad intelectual 2 pendiente ---//
         $prot = DB::select('select * from tipoProteccion');
        
         ///////////PARTE 6///////////
        //--- catalogo objetivo proyecto ---//
        $objProy = DB::select('select * from tipoObjetivoProyecto');
        
        
          
         ///////////PARTE 7///////////
        //--- catalogo riesgos---//
        $riesgos = DB::select('select * from tipoRiesgo');
        
    
        
        //mostrar vista y catalogos 
        return view('index',['institucion' => $institucion,'inv' => $inv,"gradoEstudios" => $gradoEstudios,"areaConocimiento" => $areaConocimiento,"TRL" => $TRL,"sector" => $sector,"propInt" =>  $propInt,"objProy" => $objProy,"prot" =>  $prot,"riesgos" => $riesgos]);
    }

    //validando formularios en laravel
 public function insertar(Request $request)
 {
     //recuperar valores escritos en los campos
    //Objetos para los inserts
     $tecnologia = new Tecnologia;
     $proyecto = new Proyecto;
     $propInt = new PropiedadIntelectual;
     $anEnt = new AnalisisEntorno;
     $objP= new ObjetivoProyecto;
     $col = new Colaboracion;
     $participante = new Participante;
     $equipo = new EquipoEmprendedor;
     $riesgo = new Riesgos;

    /* Tabla tecnologia  */
    $tecnologia->titulo = Input::get('titulo');
    $tecnologia->tituloComercial = Input::get('tituloComercial');
    $tecnologia->problematica = Input::get('problematica');
    $tecnologia->descripcion =  Input::get('descripcion');
    //llave foranea
    $tecnologia->fk_idInstitucion = Input::get('instEq');
    $tecnologia->fk_idTipoInvencion = Input::get('tipoInv');
    $tecnologia->fk_idSector = Input::get("sectorEst");
    $tecnologia->bajaLogica = 1;


     //Tabla propiedad intelectual
      $propInt->fk_idTipoRegistro =  Input::get("estadoAct");
      $propInt->kf_idTipoProteccion =  Input::get("tipoProt");
      $propInt->numeroRegistro = '';
      $propInt->bajaLogica =1;

     //Tabla analisisEntorno
     $anEnt->descripcionAnalisisEntorno=Input::get('analisisEnt');
     $anEnt->usoAplicacion=Input::get('usoApp');
     $anEnt->viabilidad=Input::get('viabilidad');
     $anEnt->beneficios=Input::get('beneficios');
     $anEnt->bajaLogica=1;
     $anEnt->recursosHumanos=Input::get('recursosHumanos');
     $anEnt->recursosTecnologicos=Input::get('recursosTec');
     $anEnt->recursosFinancieros=Input::get('recursosFin');

     //Tabla objetivoProyecto
     $objP->fk_idTipoObjetivoProyecto=Input::get('perProy');
     $objP->otraDescripcion=Input::get('otro_ObjetivoProyecto');
     $objP->bajaLogica=1;


     //Tabla Participantes
      //OBJETO EN TABLA
      // Crear arreglo donde se inserten estos campos
     //sustituir estos cambios

    //obtener tamaño de la tabla
      if($request->ajax()){
          return response()->json(["mensaje"=>$request->all()]);
      }
      $participanteArray = $request->input('Participante');
      $riesgoArray = $request->input('Riesgos');

     //dd($request->input($dataA));
         //return Response::json($dataA);
       print_r("valores recibidos ".response()->json($participanteArray));

      $nomPart = $request->input('nomPart');
      $gradoEstP = $request->input('gradoEstP');
      $arCon = $request->input('areaConocimiento');
      $correoP = $request->input('correoPart');
      $telPart = $request->input('telPart');
      $instPart = $request->input('instPart');

       //Tabla colaboracion
/*     $col->fk_Institucion
     $col->descripcion = Input::get('desIES');
     $col->fk_idEquipoEmprendedor
     $col->bajaLogica = 1;
*/

     //Tabla Riesgos
  /*   $dataRiesgos = [];
    foreach ($checkBox as $sa) {
    $dataRiesgos[] = [
        'estrategiaMitigacion'  => $sa,
        'descripcion'    => $sa,
        'fk_idCatalogoRiesgo'       => $sa,
        'fk_idProyecto'       => '',
        'bajaLogica'       => 1
    ];
}
*/

//$riesgos->insert($dataRiesgos);
/*
     $riesgos->estrategiaMitigacion=Input::get('estMitigacion');
     $riesgos->descripcion=Input::get('descRiesgo');
     $riesgos->fk_idCatalogoRiesgo=Input::get('descRiesgo');
     $riesgo->fk_idProyecto = '';
     $riesgo->bajaLogica = 1;

     //Tabla proyecto
     $proyecto->fk_idEquipoEmprendedor=Input::get('madurezProy');
    /*
     $proyecto->fk_idColaboracion
     $proyecto->fk_idPropiedadIntelectual
     $proyecto->fk_idObjetivoProyecto
     $proyecto->fk_idAnalisisEntorno
     $proyecto->fk_idTRL
     $proyecto->fk_idTecnologiaProyecto
     $proyecto->fk_idTecnologiaProyecto
     $proyecto->estrategiaMitigacion
     $proyecto->descripcionRiesgo
     $proyecto->bajaLogica



*/


      $tecnologia->save();
      $anEnt->save();
      //$proyecto->save();
      $propInt->save();

       //DB::insert('INSERT INTO version_authors (credit_id) VALUES (?)', array($credit_id));
}
}
