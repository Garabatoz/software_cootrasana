<div>
    <div class="card">
        <div class="card-header">
            <h5>Seleccione los roles que desea editar</h5>
        </div>
        <div class="card-body">
            @can('administrador.personas.createCliente')
            <label>
                {{Form::checkbox('cliente', 'cliente',null,['class' => 'mr-1','wire:model' => 'rolCliente'])}}
                Cliente
            </label><br>
            @endcan
            @can('administrador.personas.createConductor')
            <label>
                {{Form::checkbox('conductor', 'conductor',null,['class' => 'mr-1','wire:model' => 'rolConductor'])}}
                Conductor
            </label><br>
            @endcan
            @can('administrador.personas.createUsuario')
            <label>
                {{Form::checkbox('usuario', 'usuario',null,['class' => 'mr-1','wire:model' => 'rolUsuario'])}}
                Usuario
            </label>
            @endcan
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="form-group">
                {!! Form::label('cedula', 'Cedula') !!}
                {!! Form::text('cedula', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'cedula']) !!}
            </div>
            @error('cedula')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nombre']) !!}
            </div>
            @error('nombre')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('apellido', 'Apellido') !!}
                {!! Form::text('apellido', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'apellido']) !!}
            </div>
            @error('apellido')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('fijo', 'Fijo') !!}
                {!! Form::text('fijo', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'fijo']) !!}
            </div>
            @error('fijo')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('celular', 'Celular') !!}
                {!! Form::text('celular', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'celular']) !!}
            </div>
            @error('celular')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('direccion', 'Dirección') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'direccion']) !!}
            </div>
            @error('direccion')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('municipio', 'Municipio') !!}
                <select class="form-control" name="municipio" wire:model="municipio">
                    <option value="" selected >Seleccione</option>
                    <option value="MEDELLIN">MEDELLIN</option>
                    <option value="BELLO">BELLO</option>
                    <option value="ESTRELLA">LA ESTRELLA</option>
                    <option value="PRADO">PRADO</option>
                    <option value="SABANETA">SABANETA</option>
                    <option value="ITAGUI">ITAGUI</option>
                    <option value="BELLO">BELLO</option>
                </select>
            </div>
            @error('municipio')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('barrio', 'Barrio') !!}
                {!! Form::text('barrio', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'barrio']) !!}
            </div>
            @error('barrio')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            @enderror
            <div class="form-group">
                {!! Form::label('fechanac', 'Fecha de nacimiento') !!}
                {!! Form::date('fechanac', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'fechanac']) !!}
            </div>
            @error('fechanac')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'email']) !!}
            </div>
            @error('email')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    @if ($rolConductor == 'conductor')
    <div class="card">
        <div class="card-header">
            <h5>Datos de conductor</h5>
        </div>
        <div class="card-body">
            <div class="form-group">
                {!! Form::label('nrolicencia', 'Número de licencia') !!}
                {!! Form::text('nrolicencia', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nrolicencia']) !!}
            </div>
            @error('nrolicencia')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('fvencimiento', 'Fecha de vencimiento') !!}
                {!! Form::date('fvencimiento', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'fvencimiento']) !!}
            </div>
            @error('fvencimiento')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <div class="form-group">
                {!! Form::label('fingreso', 'Fecha de ingreso') !!}
                {!! Form::date('fingreso', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'fingreso']) !!}
            </div>
            @error('fingreso')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <label>
                {{Form::checkbox('statusConductor','0',null,['class' => 'mr-1','wire:model' => 'statusConductor'])}}
                Conductor desactivado
            </label>
        </div>
    </div>
    @endif
    @if ($rolUsuario == 'usuario')
    <div class="card">
        <div class="card-header">
            <h5>Datos de usuario</h5>
        </div>
        <div class="card-body">
            <div class="form-group">
                {!! Form::label('username', 'Nombre de usuario') !!}
                {!! Form::text('username', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'username']) !!}
            </div>
            @error('username')
            <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
        <br>
        @enderror
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {{ Form::password('password', array('id' => 'password', "class" => "form-control", 'wire:model' => 'password')) }}
            </div>
            @error('password')
                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
            <br>
            @enderror
            <label>
                {{Form::checkbox('statusUsuario','0',null,['class' => 'mr-1','wire:model' => 'statusUsuario'])}}
                Usuario desactivado
            </label>
            <h2 class="h5">Asignar rol</h2>


                @foreach ($listaRoles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1','wire:model' => 'roles']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
        </div>
    </div>
    @endif
    <div>
        {!! Form::submit('Editar persona', ['class' => 'btn btn-primary','wire:click' => 'update()']) !!}
        {!! Toastr::message() !!}

        <br>
        <br>
    </div>
    </div>

    <script>
        window.addEventListener('alert', event => {
             toastr[event.detail.type](event.detail.message,
             event.detail.title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                }
            });
    </script>
</div>
