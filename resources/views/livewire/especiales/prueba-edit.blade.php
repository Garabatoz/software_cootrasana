<div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'prueba.nombre']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('apellido', 'Apellido') !!}
                    {!! Form::text('apellido', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'prueba.apellido']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fnac', 'Fecha de nacimiento') !!}
                    {!! Form::date('fnac', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'prueba.fnac']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('edad', 'Edad') !!}
                    {!! Form::number('edad', null, ['class' => 'form-control', 'style' => 'width:100%;','wire:model' => 'prueba.edad']) !!}
                </div>
                {!! Form::submit('Editar Prueba', ['class' => 'btn btn-primary btn-sm','wire:click' => 'update()']) !!}
            </div>
        </div>
</div>
