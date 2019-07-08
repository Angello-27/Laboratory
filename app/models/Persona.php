<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $fillable = ['nombre', 'apellido', 'ci', 'sexo', 'telefono', 'correo', 'direccion'];

    protected $hidden = ['created_at', 'updated_at'];
}
