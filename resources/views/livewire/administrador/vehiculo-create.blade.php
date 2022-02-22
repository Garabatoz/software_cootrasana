<div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('numinterno', 'numero interno') !!}
                    {!! Form::text('numinterno', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'numinterno']) !!}
                </div>
                @error('numinterno')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('placa', 'placa') !!}
                    {!! Form::text('placa', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'placa']) !!}
                </div>
                @error('placa')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('modelo', 'modelo') !!}
                    {!! Form::text('modelo', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'modelo']) !!}
                </div>
                @error('modelo')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('marca', 'marca') !!}
                    {!! Form::text('marca', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'marca']) !!}
                </div>
                @error('marca')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('clase', 'clase') !!}
                    {!! Form::text('clase', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'clase']) !!}
                </div>
                @error('clase')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('tarjetaop', 'tarjetaop') !!}
                    {!! Form::text('tarjetaop', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'tarjetaop']) !!}
                </div>
                @error('tarjetaop')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencrtm', 'vencrtm') !!}
                    {!! Form::date('vencrtm', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vencrtm']) !!}
                </div>
                @error('vencrtm')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencsoat', 'vencsoat') !!}
                    {!! Form::date('vencsoat', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vencsoat']) !!}
                </div>
                @error('vencsoat')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('vencpreopera', 'vencpreopera') !!}
                    {!! Form::date('vencpreopera', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'vencpreopera']) !!}
                </div>
                @error('vencpreopera')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
                <div class="form-group">
                    {!! Form::label('slug', 'slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'slug']) !!}
                </div>
                @error('slug')
                            <br>
                                <small Style="color: red;font-weight:bold;">*{{$message}}</small>
                            <br>
                        @enderror
       
                {!! Form::submit('Crear vehiculo', ['class' => 'btn btn-primary btn-sm','wire:click' => 'store()']) !!}
                {!! Toastr::message() !!}
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
