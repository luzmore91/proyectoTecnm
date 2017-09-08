<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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

     /* seccion 1 */
      $tituloProy = $request->input('tituloProy');
      $tituloCom = $request->input('tituloCom');
      $proRes = $request->input('proRes');
      $resumenProy = $request->input('resumenProy');
      $instEq = $request->input('instEq');
      $tipoInv = $request->input('tipoInv');

      //OBJETO EN TABLA
      // Crear arreglo donde se inserten estos campos
     //sustituir estos cambios
      $nomPart = $request->input('nomPart');
      $gradoEstP = $request->input('gradoEstP');
      $arCon = $request->input('areaConocimiento');
      $correoP = $request->input('correoPart');
      $telPart = $request->input('telPart');
      $instPart = $request->input('instPart');

     /* seccion 2 */
       $madurezProy = $request->input('madurezProy');
       $sectorEst = $request->input('sectorEst');
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

     /* seccion 3 */
}
}
