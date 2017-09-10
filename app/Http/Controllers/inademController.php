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

class inademController extends Controller
{
    
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
    //Arreglos
     $tecnologia = new Tecnologia;
     $proyecto = new Proyecto;
     $propInt = new PropiedadIntelectual;
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

       //OBJETO EN TABLA
      // Crear arreglo donde se inserten estos campos
     //sustituir estos cambios
      $nomPart = $request->input('nomPart');
      $gradoEstP = $request->input('gradoEstP');
      $arCon = $request->input('areaConocimiento');
      $correoP = $request->input('correoPart');
      $telPart = $request->input('telPart');
      $instPart = $request->input('instPart');

     //Tabla propiedad intelectual
      $propInt->fk_idTipoRegisto =  Input::get("estadoAct");
      $propInt->kf_idTipoProteccion =  Input::get("tipoProt");
      $propInt->numeroRegistro = '';
      $propInt->bajaLogica =1;
     //Tabla proyecto
     $proyecto->fk_idEquipoEmprendedor=Input::get('madurezProy');
     $proyecto->fk_idColaboracion
     $proyecto->fk_idPropiedadIntelectual =
     $proyecto->fk_idObjetivoProyecto
     $proyecto->fk_idAnalisisEntorno
     $proyecto->fk_idTRL
     $proyecto->fk_idTecnologiaProyecto
     $proyecto->fk_idTecnologiaProyecto
     $proyecto->estrategiaMitigacion
     $proyecto->descripcionRiesgo
     $proyecto->bajaLogica






     /* seccion 2 */
       $madurezProy = $request->input('madurezProy');

       $estadoAct = $request->input('estadoAct');
       $tipoProt = $request->input('tipoProt');
       $perProy = $request->input('perProy');
       $otroPerProy = $request->input('otroPerProy');

     /* seccion 3 */
      $desIES = $request->input('desIES');
       //crear objeto para la insercion automatica de N columnas
       //sustituir estos cambios
      $tipoRiesgo = $request->input('tipoRiesgo');
      $descRiesgo = $request->input('descRiesgo');
      $estMitigacion = $request->input('estMitigacion');
       //fin de objeto tabla
      $analisisEnt = $request->input('analisisEnt');


     /* seccion 4 */
      $recursosHumanos = $request->input('recursosHumanos');
      $recursosTec = $request->input('recursosTec');
      $recursosFin = $request->input('recursosFin');
      $usoApp = $request->input('usoApp');
      $viabilidad = $request->input('viabilidad');
      $beneficios = $request->input('beneficios');

       $tecnologia->save();

       //DB::insert('INSERT INTO version_authors (credit_id) VALUES (?)', array($credit_id));
}
}
