<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Busca un contrato...">
        </div>
        @if ($pruebas->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de nacimiento</th>
                            <th>Edad</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pruebas as $prueba)
                            <tr>
                                <td>{{ $prueba->nombre }}</td>
                                <td>{{ $prueba->apellido }}</td>
                                <td>{{ $prueba->fnac }}</td>
                                <td>{{ $prueba->edad }}</td>
                                <td width="10px"><a href="{{ route('especiales.pruebas.edit', $prueba) }}"
                                        class="btn btn-primary btn-sm">Editar</a></td>
                                <td width="10px">
                                    {{-- <form action="{{ route('especiales.pruebas.destroy', $prueba) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form> --}}
                                    <a wire:click="$emit('deleteP',{{$prueba->id}})" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $pruebas->links() }}
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
        Livewire.on('deleteP', pruebaId => {
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

                Livewire.emit('destroy',pruebaId);

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
