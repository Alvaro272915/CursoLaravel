<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grupo_familiar', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger("id_paciente");
            $table->integer("cedula");
            $table->string("nombres");
            $table->string("apellidos");
            $table->bigInteger("telefono");
            $table->string("parentesco");
            $table->timestamps();

            //$table->foreing('id_paciente')->references('idpaciente')->on("pacientes") ;

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_familiar');
    }
};
