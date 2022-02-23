<div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('numinterno', 'Vehiculo') !!}
                    {!! Form::text('numinterno', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.numinterno']) !!}
                </div>
                @error('vehiculo.numinterno')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('placa', 'Placa') !!}
                    {!! Form::text('placa', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.placa']) !!}
                </div>
                @error('vehiculo.placa')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror

                <div class="form-group">
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.modelo']) !!}
                </div>
                @error('vehiculo.modelo')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('marca', 'Marca') !!}
                    {!! Form::text('marca', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.marca']) !!}
                </div>
                @error('vehiculo.marca')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('clase', 'Clase') !!}
                    {!! Form::text('clase', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.clase']) !!}
                </div>
                @error('vehiculo.clase')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror

                <div class="form-group">
                    {!! Form::label('tarjetaop', 'Tarjeta de Operación') !!}
                    {!! Form::text('tarjetaop', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.tarjetaop']) !!}
                </div>
                @error('vehiculo.tarjetaop')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencrtm', 'Revisión tecnico mecanica') !!}
                    {!! Form::date('vencrtm', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.vencrtm']) !!}
                </div>
                @error('vehiculo.vencrtm')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencsoat', 'soat') !!}
                    {!! Form::date('vencsoat', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.vencsoat']) !!}
                </div>
                @error('vehiculo.vencsoat')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencpreopera', 'Preoperacional') !!}
                    {!! Form::date('vencpreopera', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.vencpreopera']) !!}
                </div>
                @error('vehiculo.vencpreopera')
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
             @enderror
                </div>
            </div>

        </div>
        {!! Form::submit('editar vehiculo', ['class' => 'btn btn-primary btn-sm','wire:click' => 'update()']) !!}
        {!! Toastr::message() !!}
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

