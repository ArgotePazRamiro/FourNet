@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Planes</h1>
         <h2><u><a class="btn btn-primary mb-2" href="{{route('planes.create') }}"> 
                Crear Nuevo Plan
            </a></u></h2> 
    </div>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-1">
           
        </div>
        
        
        <table class="table table-striped table-dark ">
            <thead>
                <tr style="color: black" class="table-succes">
                    <th scope="col">Id Planes</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Velocidad de Subida</th>
                    <th scope="col">Velocidad de Bajada</th>
                    <th scope="col">Precio</th>
                    
                </tr>
            </thead>
            <tbody>
                
                @forelse ($planes as $portItem)
                
                 <tr>
                    <td scope="row">{{ $portItem->idPlanes }}</td>
                    <td >{{ $portItem->Nombre }}</td>
                    <td>{{ $portItem->Velocidad_subida }} </td>
                    <td>{{ $portItem->Velocidad_bajada }}</td>
                    <td>{{ $portItem->Precio}}</td>
                    
                </tr> 
                @empty
                <tr>
                    <td colspan="5">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-5 py-2 rounded relative"
                            role="alert">
                            <p><strong class="font-bold">{{ __("No hay Planes") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr> 
                @endforelse
            </tbody> 
            
        </table>
          
    </div>
@endsection