<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class inademController extends Controller
{
    
    ///desplegar vista desde el controlador 
    public function ver()
    {
          $tipo = DB::select('select * from tipoinvencion');

      
        //consulta en DB
        return view('index',['tipo' => $tipo]);
    }
}