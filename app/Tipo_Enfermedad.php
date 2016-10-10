<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Enfermedad extends Model
{
    protected $fillable = [
        'nombre', 'estatus', 'usuario_ini_id','usuario_act_id'
        ,'usuario_eli_id'
    ];
}
