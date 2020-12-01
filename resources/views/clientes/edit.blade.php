@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form method="POST" action="{{ route('clientes.update', $clientes) }}">
                 @method('PATCH')
                <h1 class="display-4">Editar Cliente</h1>
                <hr>
                @include('clientes.form',['btnText'=>'Actualizar'])
            </form>
        </div>
    </div>
</div>

@endsection