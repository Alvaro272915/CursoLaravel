<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacientesModelo extends Model
{
    use HasFactory;
    protected $table = "pacientes" ;
    protected $primarykey = "idpaciente" ;
    protected $fillable = ["cedula", "nombres", "apellidos", "telefono", "email"] ;

}
