<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Paciente extends Model
{
    protected $table = 'paciente';

    protected $fillable = ['seguro', 'observacion'];

    protected $hidden = ['created_at', 'updated_at', 'persona_id'];

}
