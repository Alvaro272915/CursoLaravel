<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Integer;
use Illuminate\Database\Seeder;

class pacientesseader extends Seeder
{
    public function run(): void
    {
        DB::table('pacientes')->insert([
            'cedula' => Int::random(10),
            'nombres' => Str::random(10),
            'apellidos' => Str::random(10),
            'telefono' => Int::random(10),
            'email' => Str::random(10)

        ]);
    }
}
