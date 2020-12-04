<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planes;


class PlanesController extends Controller
{

    public function index()
    {
        $planes=planes::all();
        return view('planes.index',['planes'=> $planes]);
        
    }

    
    public function create()
    {
        $planes=new planes;
        return view("planes.create", compact("planes"));
    }

    public function store(Request $request)
    {
        planes::create([
            'Nombre'=>request('Nombre'),
            'Velocidad_subida'=>request('Velocidad_subida'),
            'Velocidad_bajada'=>request('Velocidad_bajada'),
            'Precio'=>request('Precio'),

        ]);
        return redirect()->route('planes.index');

    }

    
    

    
    public function edit(planes $planes)
    {
        return view('planes.edit',[

            'planes'=>$planes
        ]);    
    }

   
    public function update(planes $planes)
    {
        $planes->update([
            'Nombre'=>request('Nombre'),
            'Velocidad_subida'=>request('Velocidad_subida'),
            'Velocidad_bajada'=>request('Velocidad_bajada'),
            'Precio'=>request('Precio'),
        ]);
        return redirect()->route('planes.show',$planes);
    }

    
    public function destroy(planes $planes)
    {
        $planes->delete();
        return redirect()->route('planes.index');
    }
}
