<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\ClientePlan;
use App\Models\planes;
use App\Models\Equipo;


class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= ClientePlan::join('persona','clienteplan.persona_id','=','persona.idPersona')
                    ->join('planes','clienteplan.planes_id','=','planes.idPlanes')
                    ->select('persona.CI as CI','persona.Nombres as Nombres','persona.Apellidos as Apellidos',
                    'persona.Direccion as Direccion','persona.Cel1 as Cel1',
                    'planes.Nombre as Nombre','planes.Velocidad_subida as Velocidad_subida',
                    'planes.Velocidad_bajada as Velocidad_bajada','planes.Precio as Precio')    
                    ->where('persona.Rol','=','cliente')
                    ->get();

        return view('servicios.index',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
