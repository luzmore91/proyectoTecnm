<?php

namespace inadem;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
     ////tabla a utilizar
    protected $table = 'participante';
    public $timestamps = false;

    public function tecnologia()
    {
         return $this->hasOne('inadem\Tecnologia');
    }
}
