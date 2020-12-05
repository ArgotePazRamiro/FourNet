<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class TecnicosController extends Controller
{
  public function __construct(){
    
    $this->middleware('auth')->except('index');
  }
    public function index()
    {
      $persona =Persona::select('persona.CI as CI','persona.Nombres as Nombres','persona.Apellidos as Apellidos','persona.Direccion as Direccion','persona.Cel1 as Cel1','persona.Estado as Estado','persona.Rol as Rol')
      ->whereRol('empleado')
      ->get();
return view('tecnicos.index',compact('persona'));
  /* $persona = Persona::all();

  return view("tecnicos.index",[
  'persona' => $persona]); */
    }


    public function create()
    {
        $persona = Persona::all();
        $title = __("Crear tecnicos");
        $textButton = __("Crear");
        $route = route("tecnicos.store");
        return view("tecnicos.create", compact("title", "textButton", "route", "persona"));
    }

    public function store(Request $request)
    {
      
      Persona::create([
        'CI' => request('CI'),
        'Nombres' => request('Nombres'),
        'Apellidos' => request('Apellidos'),
        'Direccion' => request('Direccion'),
        'Cel1' => request('Cel1'),
        'Estado' => request('Estado'),
        'Rol' => request('Rol'),
      ]);
      return redirect()->route('tecnicos.index');
    }

    public function edit($idPersona)
    {
      $persona=Persona::find($idPersona);
      return view('tecnicos.edit',compact(['persona']));
        // $update = true;
        // $title = __("Editar tecnico");
        // $textButton = __("Actualizar");
        // return view("restaurant.edit", compact("update", "title", "textButton", "route", "persona"));
    }

    public function update(Request $request,$idPersona)
    {
       $request->validate([
        'CI' => 'required',
        'Nombres' => 'required',
        'Apellidos' => 'required',
        'Direccion' => 'required',
        'Cel1' => 'required',
        'Estado' => 'required',
        'Rol' => 'required',
      ]); 
      Persona::where('idPersona',$idPersona)->update($request->all());
      return redirect()->route('tecnicos.index')->with('status', 'La persona se ha actualizado');
        
    }

    public function destroy($idPersona)
    {
      Persona::where('idPersona',$idPersona)->delete();
      return redirect()->route('tecnicos.index');
    }
}
