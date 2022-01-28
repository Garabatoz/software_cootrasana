<div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'nombre']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('apellido', 'Apellido') !!}
                    {!! Form::text('apellido', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'apellido']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fnac', 'Fecha de nacimiento') !!}
                    {!! Form::date('fnac', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'fnac']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('edad', 'Edad') !!}
                    {!! Form::number('edad', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'edad']) !!}
                </div>
                {!! Form::submit('Crear Prueba', ['class' => 'btn btn-primary btn-sm','wire:click' => 'store()']) !!}
            </div>
        </div>
</div>
