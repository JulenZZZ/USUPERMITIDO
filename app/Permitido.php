<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permitido extends Model
{
    protected $table='BD_Permitido';
    protected $fillable = [
         'nombreUsu', 'permiso'
    ];
}
