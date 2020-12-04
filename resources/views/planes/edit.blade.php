@extends("layouts.app")

@section("content")
    <div class="flex justify-center flex-wrap p-4 mt-5">
      <div class="flex justify-center flex-wrap  p-1 mt-1">
        <div class="text-center">
          <h1 class="mb-1">{{ __("EDITAR PLAN") }}</h1>
        </div>
      </div>
      <div class="container-ciudades">
        <div class="container">
          <form class="w-full max-w-lg" method="POST" action="{{ route('planes.update', $portItem) }}" enctype="multipart/form-data">
            @csrf @method('PATCH')
            
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Nombre">
                    {{ __("Nombre") }}
                  </label>
                  <input name="Nombre" value="{{ old("Nombre", $portItem->Nombre) }}"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="Nombre" type="text">
                  <p class="text-gray-600 text-xs italic"></p>
                  @error("Nombre")
                    <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Velocidad_subida">
                      {{ __("Velocidad de subida") }}
                    </label>
                    <input name="Velocidad_subida" value="{{ old("Velocidad_subida", $portItem->Velocidad_subida) }}"
                      class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="Velocidad_subida" type="text">
                    <p class="text-gray-600 text-xs italic"></p>
                    @error("Velocidad_subida")
                      <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Velocidad_bajada">
                      {{ __("Velocidad de bajada") }}
                    </label>
                    <input name="Velocidad_bajada" value="{{ old("Velocidad_bajada", $portItem->Velocidad_bajada) }}"
                      class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="Velocidad_bajada" type="text">
                    <p class="text-gray-600 text-xs italic"></p>
                    @error("Velocidad_bajada")
                      <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Precio">
                      {{ __("Precio") }}
                    </label>
                    <input name="Precio" value="{{ old("Precio", $portItem->Precio) }}"
                      class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="Precio" type="text">
                    <p class="text-gray-600 text-xs italic"></p>
                    @error("Precio")
                      <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                

               
                <div class="w-full px-3">
                    <button type="submit" class="btn btn-primary">GUARDAR DATOS</button>
                </div>
              </div>
            
          </form>
        </div>
      </div>
    </div>
@endsection
