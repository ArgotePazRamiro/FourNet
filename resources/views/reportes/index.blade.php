@extends("layouts.app")

@section("content")

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Reportes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Calendario
          </button> 
        </div>
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

@endsection