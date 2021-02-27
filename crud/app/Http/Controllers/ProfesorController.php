<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::All();
        return view("profesor.listar", ['profesores'=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("profesor.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesor = new Profesor($request->input());
        $profesor->saveOrFail();
        $profesores = Profesor::All();
        return view("profesor.listar", ["profesores"=>$profesores,
        "msj" => "El profesor $profesor->nombre $profesor->apellido ha sido insertado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        return view("profesor.edit",['profesor'=>$profesor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        $profesor->fill($request->input())->saveOrFail();
        $profesores = Profesor::All();

        return view("profesor.listar",["msj"=> "El alumno $profesor->nombre se ha actualizado", "profesores"=>$profesores]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        $profesores = Profesor::All();
        return view("profesor.listar", ["profesores"=>$profesores,
            "msj" => "El profesor $profesor->nombre $profesor->apellido ha sido borrado"]);
    }
}
