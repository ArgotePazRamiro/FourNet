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
                        value="{{old('Nombre', $clientes ->Nombre)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su nombre.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Usuario">Usuario</label>
                    <input type="text" class="form-control" id="Usuario" name="Usuario"
                        value="{{old('Usuario', $clientes ->Usuario)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su Usuario.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Contrasenia">Contraseña</label>
                    <input type="text" class="form-control" id="Contrasenia" name="Contrasenia"
                        value="{{old('Contrasenia', $clientes ->Contrasenia)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su contraseña.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="UsuarioPPPoE">UsuarioPPPoE</label>
                        <input type="text" class="form-control" id="UsuarioPPPoE" name="UsuarioPPPoE" 
                             value="{{$clientes ->UsuarioPPPoE}}" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su UsuarioPPPoE.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ContraseniaPPPoE">ContraseñaPPPoE</label>
                        <input type="text" class="form-control" id="ContraseniaPPPoE" name="ContraseniaPPPoE" 
                        value="{{$clientes ->ContraseniaPPPoE}}" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su ContraseñaPPPoE.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="SSID">SSID</label>
                    <input type="text" class="form-control" id="SSID" name="SSID" 
                         value="{{$clientes ->SSID}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su SSID.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="PasswordSSSID">PasswordSSSID</label>
                    <input type="text" class="form-control" id="PasswordSSSID" name="PasswordSSSID"
                            value="{{$clientes ->PasswordSSSID}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su PasswordSSSID.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Tipo">Tipo</label>
                    <input type="text" class="form-control" id="Tipo" name="Tipo"
                            value="{{$clientes ->Tipo}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su Tipo.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Estado">Estado</label>
                    <input type="text" class="form-control" id="Estado" name="Estado"
                            value="{{$clientes ->Estado}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su Estado.
                    </div>
                </div>
                
                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block">
                    {{ $btnText }}
                </button>
                <a class="btn btn-link btn-block" href="{{route('clientes.index')}}">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>