@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cliente</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Todos</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Activo</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Retirados</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Morosos</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-1">
           
            {{-- <nav class="navbar navbar-light float-right">
            <form class="form-inline">
              
                  <input name="nombres"  class="form-control mr-sm-2" type="search" placeholder="nombres" aria-label="nombres">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </nav> --}}
            {{-- <h6>
                @if ($search)
                    <div class="alert alert-primary" role="alert">
                        
                        Los resultados de la busqueda de pacientes {{ $search }} son:
                    </div>
                    @else
                @endif
            </h6>  --}}
            <!-- Boton para crear .... autentificar-->
            
            <h2><u><a class="btn btn-primary mb-2" href="{{route('clientes.create') }}"> 
                Crear Nuevo cliente
            </a></u></h2>
            
            
            
        </div>
        
        
        <table class="table table-striped table-dark ">
            <thead>
                <tr style="color: black" class="table-succes">
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">UsuarioPPPoE</th>
                    <th scope="col">ContraseñaPPPoE</th>
                    <th scope="col">SSID</th>
                    <th scope="col">PasswordSSSID</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estado</th>

                </tr>
            </thead>
            <tbody>
                
                 @forelse ($clientes as $portItem)
                 <tr>
                    <th scope="row">{{ $portItem->Nombre }}</th>
                    <td><u>{{ $portItem->Usuario }} </u></td>
                    
                    <td>{{ $portItem->Contrasenia }}</td>
                    <td>{{ $portItem->UsuarioPPPoE}}</td>
                    <td>{{ $portItem->ContraseniaPPPoE}}</td>
                    <td>{{ $portItem->SSID}}</td>
                    <td>{{ $portItem->PasswordSSSID}}</td>
                    <td>{{ $portItem->Tipo}}</td>
                    <td>{{ $portItem->Estado}}</td>

                </tr> 
                @empty
                <p class="list-group-item border-0 mb-3 shadow-sm">
                    No hay Empleados Registrados
                </p> 
    
            </tbody>
                
            @endforelse
    </table>
          
    </div>
@endsection