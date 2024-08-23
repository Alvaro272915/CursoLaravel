<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacientesModelo ;

class pacientesController extends Controller
{

    public function listar(){
        $pacientes = pacientesModelo::all() ;
        return view('vistapacientes.listar')->with("pacientes",$pacientes);    
    }

    public function create (){
        return view('vistapacientes.create');
    }

    public function guardar (Request $request){
        pacientesModelo::create([
            "cedula"=>$request->cedula ,
            "nombres"=>$request->nombres ,
            "apellidos"=>$request->apellidos, 
            "telefono"=>$request->telefono ,
            "email"=>$request->email 
        ]) ;
        return redirect()->route('pacientes.listar');
    }

    public function actualizar ($idpaciente){
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->first();
        return view('vistapacientes.actualizar')->with("pacientes",$pacientes);    
    }

    public function guardarActualizar (Request $request , $idpaciente){
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->update([
            "cedula"=>$request->cedula ,
            "nombres"=>$request->nombres ,
            "apellidos"=>$request->apellidos, 
            "telefono"=>$request->telefono ,
            "email"=>$request->email 
        ]);
        return redirect()->route('pacientes.listar');
    }

    public function eliminar ($idpaciente){
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->first();
        return view('vistapacientes.eliminar')->with("pacientes",$pacientes);    
    }

    public function guardareliminar (Request $request , $idpaciente){
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->delete([
            "cedula"=>$request->cedula ,
            "nombres"=>$request->nombres ,
            "apellidos"=>$request->apellidos, 
            "telefono"=>$request->telefono ,
            "email"=>$request->email 
        ]);
        return redirect()->route('pacientes.listar');
    }



}
