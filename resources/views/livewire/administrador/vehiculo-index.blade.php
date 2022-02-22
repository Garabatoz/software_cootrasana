<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Busca un vehiculo...">
        </div>
        @if ($vehiculos->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Numero interno</th>
                            <th>Placa</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Clase</th>
                            <th>Tarjeta operacional</th>
                            <th>crtm</th>
                            <th>soat</th>
                            <th>venpreoperacional</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehiculos as $vehiculo)
                            <tr>
                                <td>{{ $vehiculo->numinterno }}</td>
                                <td>{{ $vehiculo->placa }}</td>
                                <td>{{ $vehiculo-> modelo }}</td>
                                <td>{{ $vehiculo->marca }}</td>
                                <td>{{ $vehiculo->clase }}</td>
                                <td>{{ $vehiculo->tarjetaop}}</td>
                                <td>{{ $vehiculo->vencrtm }}</td>
                                <td>{{ $vehiculo->vencsoat }}</td>
                                <td>{{ $vehiculo->vencpreopera}}</td>

                                <td width="10px"><a href="{{ route('administrador.vehiculos.edit', $vehiculo) }}"
                                        class="btn btn-primary btn-sm">Editar</a></td>
                                <td width="10px">
                                    <a wire:click="$emit('deleteP',{{$vehiculo->id}})" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $vehiculos->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No existe ningún registro</strong>
            </div>
        @endif
    </div>
    @push('js')
    <script src="sweetalert2.all.min.js"></script>
    <script>
        Livewire.on('deleteP', vehiculoId => {
            Swal.fire({
            title: 'Esta seguro?',
            text: "Esto no se puede revertir!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, bórralo!'
            }).then((result) => {
            if (result.isConfirmed) {

                Livewire.emit('destroy',vehiculoId);

                Swal.fire(
                'Eliminado!',
                'El registro ha sido eliminado.',
                'success'
                )
            }
            })
        });
    </script>
    @endpush
</div>
