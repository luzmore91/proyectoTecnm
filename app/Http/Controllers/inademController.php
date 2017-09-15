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
<<<<<<< HEAD
use App\TipoInvencion;
use Log;

class inademController extends Controller
{
    public function reciboArray(Request $request){
        //modelo de la tabla Participante
        if($request->ajax()){

            $dato =$request->all(); // This will get all the request data.
=======
use App\TokenIna;
use Log;



class inademController extends Controller
{



    public function insertarRiesgo(Request $request){
          //modelo de la tabla Riesgo
$retorno = '';
  if($request->ajax()){
     $dato =$request->riesgo;
           $riesgo = new Riesgos;

      foreach($dato as $d){

               $riesgo->fk_idTipoRiesgo = $d["fk_idTipoRiesgo"];//$request->input('fk_institucion');
               $riesgo->estrategiaMitigacion = $d['estrategiaMitigacion'];
               $riesgo->descripcion = $d['descripcion'];
               $riesgo->bajaLogica=$d['bajaLogica'];

      }
           $saved = $riesgo->save();
       }

    if($saved){
    // Hurray!
        $retorno = "guardado exitosamente";
    //consultar los valores insertados
         }
    else {
    // Whooops
        $retorno = "intenta nuevamente por favor";
            }
         return response()->json($retorno);
    }

    public function tokenInademApp(Request $request){
        if($request->ajax()){
          $dato =$request->llave;
          $llavecita = new TokenIna;
          $llavecita->llave=$dato;
          $llavecita->save();

            return response()->json('almacenado');
        }

    }

    public function insertarParticipante(Request $request){


     //modelo de la tabla Participante
  if($request->ajax()){

    $dato =$request->participante; // This will get all the request data.
>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299

            $participante = new Participante;


<<<<<<< HEAD
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
=======
         //consulta a la tabla tecnologiaProyecto, el ultimo ID integrado
       $idTec = DB::select('select idToken from tokeninadem ORDER BY idToken DESC LIMIT 1 ');
       $result = json_decode(json_encode($idTec), true);

       foreach($dato as $d){
               $participante->fk_idInstitucion = $d["fk_institucion"];//$request->input('fk_institucion');
               $participante->fk_idGradoEstudios = $d['fk_idGradoEstudios'];
               $participante->fk_idAreaConocimientos = $d['fk_idAreaConocimientos'];
               //$participante->fk_idDireccion = $d['fk_idDireccion'];
               $participante->correoElectronico =$d['correoElectronico'];
               $participante->nombre = $d['nombre'];
               $participante->apellidoPaterno = $d['apellidoPaterno'];
               $participante->apellidoMaterno = $d['apellidoMaterno'];
               $participante->numeroMovil = $d['numeroMovil'];
               //$participante->fechaNacimiento = $d['fechaNacimiento'];
               $participante->curp = $d['curp'];
               $participante->genero = $d['genero'];
               $participante->telefonoFijo = $d['telefonoFijo'];
               $participante->numeroControl =$d['numeroControl'];
               $participante->correoInstitucional = $d['correoInstitucional'];
               $participante->bajaLogica = $d['bajaLogica'];
              // $participante->fk_idTecnologiaProyecto = $idTec;
          // $participante->fk_idTokenAppIn = $result;


       }
      foreach($result as $i){
         $participante->fk_idTokenAppIn = $i['idToken'];

          $idT = $i['idToken'];
      }

         $saved = $participante->save();
        if($saved){
            //consultar los valores insertados.
            $participanteQuery = DB::select('select participante.idParticipante,participante.nombre,participante.apellidoPaterno,participante.apellidoMaterno,participante.correoElectronico,participante.numeroMovil,
tipogradoestudios.nivel,areaconocimiento.descripcion,institucion.nombreInstitucion from participante INNER JOIN tipogradoestudios
ON participante.fk_idGradoEstudios=tipogradoestudios.idGradoEstudios
INNER JOIN institucion
 ON institucion.idInstitucion=participante.fk_idInstitucion
INNER JOIN areaconocimiento
ON areaconocimiento.idAreaConocimiento=participante.fk_idAreaConocimientos
WHERE
participante.fk_idTokenAppIn  = '.$idT);
            $insertados = $participanteQuery;
         }
    else {
    // Whooops
        $insertados = "intenta nuevamente por favor";
            }
         return response()->json($insertados);


>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299
        }
    }

<<<<<<< HEAD
=======
    }

public function eliminarParticipante(Request $request){
if($request->ajax()){
    $dato =$request->idParticipante;

    $saved = DB::select("DELETE FROM participante WHERE idParticipante = ".$dato);

    if($saved){
        $envio = "si";
    }else{
        $envio = "no";
    }
    return response()->json(['eliminado'=>$envio,'idParticipante'=>$dato]);
}
}



>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299
    ///desplegar vista desde el controlador 
    public function ver()
    { 
        /// Consulta los catalogos de la BD

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
        $TRL = DB::select('select * from trl');
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
<<<<<<< HEAD
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
=======
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
>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299
     $col->descripcion = Input::get('desIES');
     $col->fk_idEquipoEmprendedor
     $col->bajaLogica = 1;*/

<<<<<<< HEAD
        //$riesgos->insert($dataRiesgos);
        /*
     $riesgos->estrategiaMitigacion=Input::get('estMitigacion');
     $riesgos->descripcion=Input::get('descRiesgo');
     $riesgos->fk_idCatalogoRiesgo=Input::get('descRiesgo');
     $riesgo->fk_idProyecto = '';
     $riesgo->bajaLogica = 1;
=======

>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299

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

 public function editar($id){
    //Se obtiene el proyecto con el id
    $proyecto = Tecnologia::find($id);
    $instituciones = Institucion::all();
    $invenciones = TipoInvencion::all();

    if($proyecto == null){
        return "El proyecto no existe";
    }
    return view('editar', ["proyecto"=>$proyecto, "instituciones"=>$instituciones, "invenciones"=>$invenciones]);

<<<<<<< HEAD
=======


*/




      $tecnologia->save();
      $anEnt->save();
      //$proyecto->save();
      $propInt->save();
      $objP->save();

    return redirect()->back();
>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299
}
}
