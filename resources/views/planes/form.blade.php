@csrf
<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        </div>
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate>

                <div class="mb-3">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre"
                        value="{{old('Nombre', $planes ->Nombre)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca el Nombre del plan.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Velocidad_subida">Velocidad Subida</label>
                    <input type="text" class="form-control" id="Velocidad_subida" name="Velocidad_subida"
                        value="{{old('Velocidad_subida', $planes ->Velocidad_subida)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca la Velocidad de Subida.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Velocidad_bajada">Velocidad Bajada</label>
                    <input type="text" class="form-control" id="Velocidad_bajada" name="Velocidad_bajada"
                        value="{{old('Velocidad_bajada', $planes ->Velocidad_bajada)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca la Velocidad de Bajada.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Precio">Precio</label>
                    <input type="text" class="form-control" id="Precio" name="Precio"
                        value="{{old('Precio', $planes ->Precio)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca el Precio.
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block">
                    {{ $btnText }}
                </button>
                <a class="btn btn-link btn-block" href="{{route('planes.index')}}">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>