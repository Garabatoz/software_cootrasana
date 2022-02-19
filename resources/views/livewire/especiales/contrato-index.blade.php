<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Busca un contrato...">
        </div>
        @if ($contratos->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Consecutivo</th>
                            <th>Tipo de contrato</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Cliente</th>
                            <th>Contrato firmado</th>
                            <th>Contrato</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contratos as $contrato)
                            <tr>
                                <td>{{ $contrato->consecutivo }}</td>
                                <td>{{ $contrato->servicio }}</td>
                                <td>{{ $contrato->origen }}</td>
                                <td>{{ $contrato->destino }}</td>
                                <td>{{ $contrato->nombre }}</td>
                                <td>{{ $contrato->contratofirmado }}</td>
                                <td><a target="_blank" href="{{ route('especiales.contratos.pdf',$contrato->contrato_id) }}"><i class="fas fa-lg fa-file-pdf"></i></a></td>
                                <td width="10px"><a href="{{ route('especiales.contratos.edit', $contrato->contrato_id) }}"
                                        class="btn btn-primary btn-sm">Firmar</a></td>
                                <td width="10px">
                                    <form action="{{ route('especiales.contratos.destroy', $contrato->contrato_id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Anular</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $contratos->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No existe ningún registro</strong>
            </div>
        @endif
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
