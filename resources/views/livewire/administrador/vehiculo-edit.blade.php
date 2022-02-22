<div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('numinterno', 'Numero interno') !!}
                    {!! Form::text('numinterno', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.numinterno']) !!}
                </div>
                @error('vehiculo.numinterno')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('placa', 'placa') !!}
                    {!! Form::text('placa', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.placa']) !!}
                </div>
                @error('vehiculo.placa')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
               
                <div class="form-group">
                    {!! Form::label('modelo', 'modelo') !!}
                    {!! Form::text('modelo', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.modelo']) !!}
                </div>
                @error('vehiculo.modelo')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('marca', 'marca') !!}
                    {!! Form::text('marca', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.marca']) !!}
                </div>
                @error('vehiculo.marca')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('clase', 'clase') !!}
                    {!! Form::text('clase', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.clase']) !!}
                </div>
                @error('vehiculo.clase')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                
                <div class="form-group">
                    {!! Form::label('tarjetaop', 'Tarjeta Operacional') !!}
                    {!! Form::text('tarjetaop', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.tarjetaop']) !!}
                </div>
                @error('vehiculo.tarjetaop')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencrtm', 'crtm') !!}
                    {!! Form::date('vencrtm', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.vencrtm']) !!}
                </div>
                @error('vehiculo.vencrtm')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencsoat', 'soat') !!}
                    {!! Form::date('vencsoat', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.vencsoat']) !!}
                </div>
                @error('vehiculo.vencsoat')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencpreopera', 'vencpreoperacional') !!}
                    {!! Form::date('vencpreopera', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.vencpreopera']) !!}
                </div>
                @error('vehiculo.vencpreopera')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('slug', 'slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vehiculo.slug']) !!}
                </div>
                @error('vehiculo.slug')
                            <br>
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

