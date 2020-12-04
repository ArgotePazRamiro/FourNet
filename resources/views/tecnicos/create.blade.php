@extends("layouts.app")

@section("content")
<div class="flex justify-center flex-wrap  p-1 mt-1">
  <div class="text-center">
    <h1 class="mb-1">{{ __("NUEVO TECNICO") }}</h1>
  </div>
</div>
<div class="conatiner-ciudades">
  <div class="container">
    <form class="w-full max-w-lg" method="POST" action="{{ route('tecnicos.store') }}"
      enctype="multipart/form-data">
      @csrf
      @isset($update)
        @method("PUT")
      @endisset
      
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="CI">
                  {{ __("Carnet de Identidad") }}
                </label>
                <input name="CI" value="{{ old("CI") }}"
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="CI" type="text">
                <p class="text-gray-600 text-xs italic"></p>
                @error("CI")
                  <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Nombres">
              {{ __("Nombres") }}
            </label>
            <input name="Nombres" value="{{ old("Nombres") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Nombres" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Nombres")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Apellidos">
              {{ __("Apellidos") }}
            </label>
            <input name="Apellidos" value="{{ old("Apellidos") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Apellidos" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Apellidos")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Direccion">
              {{ __("Direccion") }}
            </label>
            <input name="Direccion" value="{{ old("Direccion") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Direccion" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Direccion")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Cel1">
              {{ __("Celular") }}
            </label>
            <input name="Cel1" value="{{ old("Cel1") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Cel1" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Cel1")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Estado">
              {{ __("Estado") }}
            </label>
            <input name="Estado" value="{{ old("Estado") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Estado" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Estado")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Rol">
              {{ __("Rol") }}
            </label>
            <input name="Rol" value="{{ old("Rol") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Rol" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Rol")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div>


          {{-- <div class="row">
            <div class="col-md-5 mb-3">
                <label for="Rol">Rol</label>
                <select class="custom-select d-block w-100" id="Rol" name="Rol"
                 required>
                  @foreach ($paciente as $pacItem)
            <option value="{{$pacItem->id}}"> {{$pacItem->nombres}} {{$pacItem->apPaterno}}</option>
                 @endforeach 
                 <option value="{{ old("Rol") }}">Administrador</option>
                 <option value="{{ old("Rol") }}">Cliente</option>
                 <option value="{{ old("Rol") }}">Tecnico</option>
                </select>
                <div class="invalid-feedback">
                    Seleccione un Rol.
                </div>
            </div>
        </div> --}}

   {{--        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Rol">
              {{ __("Rol") }}
            </label>
            <input name="Rol" value="{{ old("Rol") }}"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="Rol" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("Rol")
              <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
              </div>
            @enderror
          </div> --}}
            <div class="w-full px-3">
              <button type="submit" class="btn btn-primary">GUARDAR DATOS</button>
            </div>
        </div>
    </form>
  </div>
</div>
@endsection
