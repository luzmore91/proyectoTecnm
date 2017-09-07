<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



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
        $gradoEstudios = DB::select('select * from gradoEstudios');
        //--- catalogo areaConocimiento---//
        $areaConocimiento = DB::select('select * from areaConocimiento'); 
        
          ///////////PARTE 2 y 3///////////
        //--- catalogo TRL---//
        $TRL = DB::select('select * from TRL');
        //--- catalogo Sector---//
        $sector = DB::select('select * from sector'); 
        
         ///////////PARTE 4 y 5///////////
        //--- catalogo propiedad intelectual---//
        $propInt = DB::select('select * from tipoRegistro'); //propiedadIntelectual
        //--- catalogo propiedad intelectual 2 pendiente ---//
        
        
         ///////////PARTE 6///////////
        //--- catalogo objetivo proyecto ---//
        $objProy = DB::select('select * from objetivoProyecto');
        
        
          
         ///////////PARTE 7///////////
        //--- catalogo riesgos---//
        //$riesgos = DB::select('select * from tipoRiesgo');
        
    
        
        //mostrar vista y catalogos 
        return view('index',['institucion' => $institucion,'inv' => $inv,"gradoEstudios" => $gradoEstudios,"areaConocimiento"=>$areaConocimiento]);
    }
}