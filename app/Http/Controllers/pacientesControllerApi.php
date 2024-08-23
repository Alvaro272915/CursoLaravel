<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pacientesModelo ;

class pacientesControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = pacientesModelo::all() ;
        return response()->json([
            "status" =>200,
            "data"=>$pacientes 
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pacientes = pacientesModelo::create([
            "cedula"=>$request->cedula ,
            "nombres"=>$request->nombres ,
            "apellidos"=>$request->apellidos, 
            "telefono"=>$request->telefono ,
            "email"=>$request->email 
        ]) ;
        return response()->json([
            "status" =>200,
            "data"=>$pacientes
        ]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idpaciente)
    {
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->first();
        return response()->json([
            "status" =>200,
            "data"=>$pacientes 
        ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idpaciente)
    {
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->update([
            "cedula"=>$request->cedula ,
            "nombres"=>$request->nombres ,
            "apellidos"=>$request->apellidos, 
            "telefono"=>$request->telefono ,
            "email"=>$request->email 
        ]);

        return response()->json([
            "status" =>200,
            "data"=>$pacientes
        ]) ;
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $idpaciente)
    {
        $pacientes = pacientesModelo::where("idpaciente" , $idpaciente) ->delete([
            "cedula"=>$request->cedula ,
            "nombres"=>$request->nombres ,
            "apellidos"=>$request->apellidos, 
            "telefono"=>$request->telefono ,
            "email"=>$request->email 
        ]);
        return response()->json([
            "status" =>200,
            "data"=>"Paciente Eliminado con Exito"
        ]) ;

    }
}
