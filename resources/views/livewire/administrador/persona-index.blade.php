<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre o correo de una persona">
        </div>
        @if ($personas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fijo</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{$persona->id}}</td>
                            <td>{{$persona->cedula}}</td>
                            <td>{{$persona->nombre}}</td>
                            <td>{{$persona->apellido}}</td>
                            <td>{{$persona->fijo}}</td>
                            <td>{{$persona->celular}}</td>
                            <td>{{$persona->email}}</td>
                            <td width="10px">
                                @can('administrador.personas.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('administrador.personas.edit',$persona)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('administrador.personas.destroy')
                                <a {{-- wire:click="$emit('deleteP',{{$prueba->id}})"  --}}class="btn btn-danger btn-sm">Eliminar</a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$personas->links()}}
        </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
