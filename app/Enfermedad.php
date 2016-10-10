<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $fillable = [
        'nombre', 'estatus','usuario_ini_id','usuario_act_id'
        ,'usuario_eli_id'
    ];
}
