<?php

namespace inadem;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    //tabla a utilizar
    protected $table = 'tecnologiaproyecto';
    
    protected $primaryKey = 'idTecnologiaProyecto';
    
    public $timestamps = false;
    
    public function institucion()
    {
        return $this->hasOne('idInstitucion'); // links this->id to events.course_id
    }
}
