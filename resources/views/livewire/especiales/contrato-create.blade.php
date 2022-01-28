<div>
    <div class="card">
        <div class="card-header">
            <h4>Información del contrato</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                {!! Form::label('fexpedicion', 'Fecha de expedición') !!}
                {!! Form::text('fexpedicion', null, ['class' => 'form-control', 'readonly', 'style' => 'width:100%;', 'wire:model' => 'fexpedicion']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('servicio_id', 'Servicios') !!}
                {!! Form::select('servicio_id', $servicios, null, ['class' => 'form-control', 'placeholder' => 'Eliga un servicio', 'style' => 'width:100%;', 'wire:model' => 'servicio_id', 'wire:click' => 'consecutivos()']) !!}
            </div>
            @error('servicio_id')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                        @enderror
            <div class="form-group">
                {!! Form::label('consecutivo', 'Consecutivo') !!}
                {!! Form::text('consecutivo', $consecutivo, ['class' => 'form-control', 'style' => 'width:100%;', 'readonly']) !!}
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Información del cliente</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="form-group" wire:ignore>
                    <select name="cliente_id" class="form-control select2Clientes" style="width:100%;" wire:model ="cliente_id">
                        <option>Elegir un cliente</option>
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->full_name }}</option>
                        @endforeach
                    </select>
                        @error('cliente_id')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror

                </div>
                @if ($cliente_id != null)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                {!! Form::label('cedula', 'Cedula:') !!}
                                <h3><span class="badge badge-light"
                                        style="width:100%; text-align:left;">{{ $cedula }}</span></h3>
                            </div>
                            <div class="col-4">
                                {!! Form::label('nombre', 'Nombre:') !!}
                                <h3><span class="badge badge-light"
                                        style="width:100%; text-align:left;">{{ $nombre }}</span></h3>
                            </div>
                            <div class="col-4">
                                {!! Form::label('apellido', 'Apellido:') !!}
                                <h3><span class="badge badge-light"
                                        style="width:100%; text-align:left;">{{ $apellido }}</span></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                {!! Form::label('direccion', 'Direccion:') !!}
                                <h3><span class="badge badge-light"
                                        style="width:100%; text-align:left;">{{ $direccion }}</span></h3>
                            </div>
                            <div class="col-4">
                                {!! Form::label('fijo', 'Fijo:') !!}
                                <h3><span class="badge badge-light"
                                        style="width:100%; text-align:left;">{{ $fijo }}</span></h3>
                            </div>
                            <div class="col-4">
                                {!! Form::label('celular', 'Celular:') !!}
                                <h3><span class="badge badge-light"
                                        style="width:100%; text-align:left;">{{ $celular }}</span></h3>
                            </div>
                        </div>
                        <hr>
                        <label for="">¿Los datos del cliente son los mismos que el responsable?</label>
                        <div class="form-group" wire:ignore>
                            <select name="cliente_id" class="form-control" style="width:100%;" wire:model="opcion" wire:click="datosResponsable()">
                                <option value="">Elegir una opcion</option>
                                <option value="SI">Si</option>
                                <option value="NO">No</option>
                            </select>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Información de la ruta</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            {!! Form::label('fsalida', 'Fecha de salida') !!}
                            {!! Form::date('fsalida', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'fsalida']) !!}
                        </div>
                        <div class="col-6">
                            {!! Form::label('fregreso', 'Fecha de regreso') !!}
                            {!! Form::date('fregreso', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'fregreso']) !!}
                        </div>
                    </div>
                    @error('fsalida')
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                    @error('fregreso')
                    <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                                <br>
                        @enderror
                    <div class="row">
                        <div class="col-12">
                            {!! Form::label('origen', 'Origen') !!}
                            {!! Form::text('origen', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'origen']) !!}
                        </div>
                        @error('origen')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('destino', 'Destino') !!}
                            {!! Form::text('destino', old('destino'), ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'destino']) !!}
                        </div>
                        @error('destino')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('nombreResponsable', 'Responsable') !!}
                            {!! Form::text('nombreResponsable', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'nombreResponsable']) !!}
                        </div>
                        @error('nombreResponsable')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('cedulaResponsable', 'Cedula responsable') !!}
                            {!! Form::text('cedulaResponsable', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'cedulaResponsable']) !!}
                        </div>
                        @error('cedulaResponsable')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('contactoResponsable', 'Contacto responsable') !!}
                            {!! Form::text('contactoResponsable', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'contactoResponsable']) !!}
                        </div>
                        @error('contactoResponsable')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('tarifa', 'Tarifa') !!}
                            {!! Form::text('tarifa', old('tarifa'), ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'tarifa']) !!}
                        </div>
                        @error('tarifa')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('nrovehiculos', 'Número de vehiculos') !!}
                            {!! Form::number('nrovehiculos', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'nrovehiculos']) !!}
                        </div>
                        @error('nrovehiculos')
                            <br>
                                <small  Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Información de pasajeros</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            {!! Form::label('nrobebes', 'Bebes') !!}
                            {!! Form::number('nrobebes', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nrobebes']) !!}
                        </div>

                        <div class="col-2">
                            {!! Form::label('nroniños', 'Niños') !!}
                            {!! Form::number('nroniños', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nroniños']) !!}
                        </div>

                        <div class="col-2">
                            {!! Form::label('nroadultos', 'Adultos') !!}
                            {!! Form::number('nroadultos', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nroadultos']) !!}
                        </div>

                        <div class="col-2">
                            {!! Form::label('nromayores', 'Mayores') !!}
                            {!! Form::number('nromayores', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nromayores']) !!}
                        </div>
                        <div class="col-2">
                            {!! Form::label('nroincapac', 'Incapacitados') !!}
                            {!! Form::number('nroincapac', null, ['class' => 'form-control', 'style' => 'width:100%;', 'wire:model' => 'nroincapac']) !!}
                        </div>
                        <div class="col-2">
                            {!! Form::label('totalpasajeros', 'Total') !!}
                            {!! Form::number('totalpasajeros', $totalPasajeros, ['class' => 'form-control', 'readonly', 'style' => 'width:100%;', 'wire:model' => 'totalPasajeros']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {!! Form::label('listapasajeros', 'Lista de pasajeros') !!}
                            {!! Form::file('listapasajeros', ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'listapasajeros']) !!}
                        </div>

                       {{--  @if ($listapasajeros)
                            <img class="mb-4" src="{{$listapasajeros->temporaryUrl()}}" alt="">
                        @endif --}}
                        @error('listapasajeros')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-12">
                            {!! Form::label('observaciones', 'Observaciones') !!}
                            {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'observaciones']) !!}
                        </div>
                        @error('observaciones')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Vehiculos del contrato</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group" wire:ignore>
                            <select name="cliente_id" class="form-control select2Vehiculos" style="width:100%;">
                                <option value="">Buscar vehículo</option>
                                @foreach ($vehiculos as $vehiculo)
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->numinterno }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary float-right" wire:click.prevent="addVehiculo()"
                            style="width:100%;">Agregar</button>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>#</th>
                        <th>Numero interno</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Clase</th>
                        <th>Tarjeta de operacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculosContrato as $key => $contract)
                    {!! Toastr::message() !!}
                        <tr class="text-center" wire:key="{{$key}}">
                            <td class="text-left">{{$key + 1}}</td>
                            <td class="text-left">{{ $contract['numinterno'] }}</td>
                            <td class="text-left">{{ $contract['placa'] }}</td>
                            <td class="text-left">{{ $contract['modelo'] }}</td>
                            <td class="text-left">{{ $contract['marca'] }}</td>
                            <td class="text-left">{{ $contract['clase'] }}</td>
                            <td class="text-left">{{ $contract['tarjetaop'] }}</td>
                            <td>
                                <button class="btn btn-danger btn-sm" wire:click.prevent="removerVehiculo({{$key}})">X</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Conductores del contrato</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group" wire:ignore>
                            <select name="conductor_id" class="form-control select2Conductors" style="width:100%;">
                                <option value="">Buscar conductores</option>
                                @foreach ($conductors as $conductor)
                                    <option value="{{ $conductor->id }}">{{ $conductor->nombre }} {{ $conductor->apellido }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary float-right" wire:click.prevent="addConductor()"
                            style="width:100%;">Agregar</button>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Vencimiento Licencia</th>
                        <th>Fijo</th>
                        <th>Celular</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($conductoresContrato as $key => $contract)
                    {!! Toastr::message() !!}
                        <tr class="text-center" wire:key="{{$key}}">
                            <td class="text-left">{{$key + 1}}</td>
                            <td class="text-left">{{ $contract['nombre'] }}</td>
                            <td class="text-left">{{ $contract['apellido'] }}</td>
                            <td class="text-left">{{ $contract['fvencimiento'] }}</td>
                            <td class="text-left">{{ $contract['fijo'] }}</td>
                            <td class="text-left">{{ $contract['celular'] }}</td>
                            <td>
                                <button class="btn btn-danger btn-sm" wire:click.prevent="removerConductor({{$key}})">X</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! Form::submit('Crear contrato', ['class' => 'btn btn-primary btn-sm','wire:click' => 'store()']) !!}

    <script>
        document.addEventListener('livewire:load', function() {
            $('.select2Clientes').select2();
            $('.select2Vehiculos').select2();
            $('.select2Conductors').select2();
            $('.select2Clientes').on('change', function() {
                @this.set('cliente_id', this.value)
            });
            $('.select2Vehiculos').on('change', function() {
                @this.set('vehiculo_id', this.value)
            });
            $('.select2Conductors').on('change', function() {
                @this.set('conductor_id', this.value)
            });
        })

        window.addEventListener('alert', event => {
             toastr[event.detail.type](event.detail.message,
             event.detail.title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                }
            });

    </script>
</div>
