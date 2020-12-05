<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipos;
use Illuminate\Http\Response;

class clientes extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin');
    }
    public function index()
    {
        $clientes=equipos::all();
        return view("clientes.index",['clientes'=> $clientes]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(equipos $clientes)
    {
        return view("clientes.index",['clientes'=> $clientes]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=equipos::all();
        return view("clientes.create",['clientes'=> new equipos],compact('clientes'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes=equipos::all();
        equipos::create([
            'Nombre'=>request('Nombre'),
            'Usuario'=>request('Usuario'),
            'Contrasenia'=>request('Contrasenia'),
            'UsuarioPPPoE'=>request('UsuarioPPPoE'),
            'ContraseniaPPPoE'=>request('ContraseniaPPPoE'),
            'SSID'=>request('SSID'),
            'PasswordSSSID'=>request('PasswordSSSID'),
            'Tipo'=>request('Tipo'),
            'Estado'=>request('Estado'),

        ]);
        return redirect()->route('clientes.index',compact('clientes'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $clientes=equipos::all();
        return view('clientes.edit',['clientes'=>$clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(equipos $clientes)
    {
        $clientes->update(request()->all());
        return redirect()->route('clientes.index',$clientes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipos $clientes)
    {
        $clientes->delete();
        return redirect()->route('clientes.index');
    }
}
