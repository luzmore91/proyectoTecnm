<?php
namespace inadem\Http\Controllers;
use Illuminate\Http\Request;
use Datatables;
use DB;
use inadem\Tecnologia;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$proyectos = DB::table('tecnologiaproyecto')->select('titulo, descripcion');
        //$proyectos = DB::select('select * from tecnologiaproyecto');
        $proyectos = DB::select('select tp.idTecnologiaProyecto,tp.titulo, inst.nombreInstitucion,ti.descripcion from tecnologiaproyecto as tp INNER JOIN institucion as inst ON tp.fk_idInstitucion=inst.idInstitucion INNER JOIN tipoinvencion as ti ON tp.fk_idTipoInvencion=ti.idTipoInvencion'); //Tecnologia::all();
        return view('datatable', ['proyectos'=>$proyectos]);
    }
    
    public function editar($id){
        $proyecto = Tecnologia::find($id);
        if($proyecto == null){
            return "El proyecto no existe";
        }
        return view('detalleProyecto', ["proyecto"=>$proyecto]);
    }
    
    public function Actualizar(Request $request){
        //actualizar
        
        //redirigir a AdminController@Index
    }
    
    public function eliminar($id){
        //eliminar
        $proyecto = Tecnologia::find($id);
        $proyecto->delete();
         return "Acabo de eliminar ".$id;
        //redirigir a AdminController@Index
    }
}