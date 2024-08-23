<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo_familiarsModelo extends Model
{
    use HasFactory;

    protected $table = "grupo_familiar" ;
    protected $fillable = ["id_paciente", "cedula", "nombres", "apellidos", "telefono", "parentesco"] ;


}


