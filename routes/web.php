<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    route::get("pacientes/listar","App\Http\Controllers\pacientesController@listar")->name("pacientes.listar") ;
    route::get("pacientes/create","App\Http\Controllers\pacientesController@create")->name("paciente.create") ;
    route::get("pacientes/actualizar/{idpaciente}","App\Http\Controllers\pacientesController@actualizar")->name("pacientes.actualizar") ;
    route::get("pacientes/eliminar/{idpaciente}","App\Http\Controllers\pacientesController@eliminar")->name("pacientes.eliminar") ;
    route::post("pacientes/guardar","App\Http\Controllers\pacientesController@guardar")->name("paciente.guardar") ;
    route::delete("pacientes/guardareliminar/{idpaciente}","App\Http\Controllers\pacientesController@guardareliminar")->name("pacientes.guardareliminar") ;
    route::put("pacientes/guardarActualizar/{idpaciente}","App\Http\Controllers\pacientesController@guardarActualizar")->name("pacientes.guardarActualizar") ;
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





















require __DIR__.'/auth.php';


