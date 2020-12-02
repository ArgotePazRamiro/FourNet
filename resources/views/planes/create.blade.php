@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{route('planes.store')}}" method="POST">
                <h1 class="display-4">Nuevo Plan</h1>
                <hr>
                @include('planes.form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div>
</div>

@endsection