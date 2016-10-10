<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = [
        'nombre', 'estatus', 'cantidad','usuario_ini_id','usuario_act_id'
        ,'usuario_eli_id'
    ];
}
