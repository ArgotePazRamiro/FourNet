<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;


class ClientesController extends Controller
{
    public function index()
    {
      

        $persona =Persona::all();
        return view("clientes.index",[
          'persona' => $persona]);
    }


    public function create()
    {
        $persona = Persona::all();
        $title = __("Crear Persona");
        $textButton = __("Crear");
        $route = route("clientes.store");
        return view("clientes.create", compact("title", "textButton", "route", "persona"));
    }

    public function store(Request $request)
    {
      /* $request->validate([
        'Nombre' => 'required',
        'descripcion' => 'required',
        'categoria' => 'required',
        'file' => 'required|image|max:1024',
        'idLocal' => 'required'
      ]); */
      Persona::create([
        'CI' => request('CI'),
        'Nombres' => request('Nombres'),
        'Apellidos' => request('Apellidos'),
        'Direccion' => request('Direccion'),
        'Cel1' => request('Cel1'),
        'Estado' => request('Estado'),
        'Rol' => request('Rol'),
      ]);
      return redirect()->route('clientes.index');
    }

    public function edit(Persona $persona)
    {
      return view('clientes.edit', [
        'persona' => $persona,
      ]);
        // $update = true;
        // $title = __("Editar Restaurant");
        // $textButton = __("Actualizar");
        // $route = route("restaurant.update", ["restaurant" => $restaurant]);
        // return view("restaurant.edit", compact("update", "title", "textButton", "route", "restaurant"));
    }

    public function update(Request $request, Persona $persona)
    {
      
      $persona->update([
        'CI' => request('CI'),
        'Nombres' => request('Nombres'),
        'Apellidos' => request('Apellidos'),
        'Direccion' => request('Direccion'),
        'Cel1' => request('Cel1'),
        'Estado' => request('Estado'),
        'Rol' => request('Rol'),
      ]);
      return redirect()->route('clientes.index')->with('status', 'La persona se ha actualizado');
        // $this->validate($request, [
        //     "name" => "required|unique:rest,name," . $restaurant->id,
        //     "desciption" => "nullable|string|min:10"
        // ]);
        // $restaurant->fill($request->only("name", "desciption"))->save();
        // return back()->with("success", __("Restaurant actualizado!"));
    }
/* 
    public function destroy(Plato $restaurant)
    {
        $restaurant->delete();
        return back()->with("success", __("Restaurant eliminado!"));
    } */
}
