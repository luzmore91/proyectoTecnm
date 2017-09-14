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



    public function reciboArray(Request $request){


     //modelo de la tabla Participante
  if($request->ajax()){

    $dato =$request->all(); // This will get all the request data.

            $participante = new Participante;
            $tecno = new Tecnologia;

         //consulta a la tabla tecnologiaProyecto, el ultimo ID integrado
       $idTec = $tecno->id;

             $participante->fk_idInstitucion = $request->input('fk_institucion');
               $participante->fk_idGradoEstudios = $request->input('fk_idGradoEstudios');
               $participante->fk_idAreaConocimientos = $request->input('fk_idAreaConocimientos');
               $participante->fk_idDireccion = $request->input('fk_idDireccion');
               $participante->correoElectronico =$request->input('correoElectronico');
               $participante->nombre = $request->input('nombre');
               $participante->apellidoPaterno = $request->input('apellidoPaterno');
               $participante->apellidoMaterno = $request->input('apellidoMaterno');
               $participante->numeroMovil = $request->input('numeroMovil');
               $participante->fechaNacimiento = $request->input('fechaNacimiento');
               $participante->curp = $request->input('curp');
               $participante->genero = $request->input('genero');
               $participante->telefonoFijo = $request->input('telefonoFijo');
               $participante->numeroControl =$request->input('numeroControl');
               $participante->correoInstitucional = $request->input('correoInstitucional');
               $participante->bajaLogica = $request->input('bajaLogica');
               $participante->fk_idTecnologiaProyecto = $idTec;
          $participante->save();

         return response()->json(['valor'=>'hooooolaa !!  ']);


        }





      }
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
        $gradoEstudios = DB::select('select * from tipogradoestudios');
        //--- catalogo areaConocimiento---//
        $areaConocimiento = DB::select('select * from areaconocimiento');
        
          ///////////PARTE 2 y 3///////////
        //--- catalogo TRL---//
        $TRL = DB::select('select * from TRL');
        //--- catalogo Sector---//
        $sector = DB::select('select * from tiposector');
        
         ///////////PARTE 4 y 5///////////
        //--- catalogo propiedad intelectual---//
        $propInt = DB::select('select * from tipopropiedadintelectual');
        //--- catalogo propiedad intelectual 2 pendiente ---//
         $prot = DB::select('select * from tipoproteccion');
        
         ///////////PARTE 6///////////
        //--- catalogo objetivo proyecto ---//
        $objProy = DB::select('select * from tipoobjetivoproyecto');
        
        
          
         ///////////PARTE 7///////////
        //--- catalogo riesgos---//
        $riesgos = DB::select('select * from tiporiesgo');
        
    
        
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



       //Tabla colaboracion
/*     $col->fk_Institucion
     $col->descripcion = Input::get('desIES');
     $col->fk_idEquipoEmprendedor
     $col->bajaLogica = 1;
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
      $objP->save();
       //DB::insert('INSERT INTO version_authors (credit_id) VALUES (?)', array($credit_id));
}
}
