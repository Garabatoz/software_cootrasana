<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        @if ($usuarios->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td width="10px">
                                @can('administrador.usuarios.edit')
                                    <a class="btn btn-primary" href="{{route('administrador.usuarios.edit',$usuario)}}">Editar</a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$usuarios->links()}}
        </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
