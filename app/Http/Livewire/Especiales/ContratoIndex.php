<?php

namespace App\Http\Livewire\Especiales;

use App\Models\Contrato;
use Livewire\Component;
use Livewire\WithPagination;

class ContratoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

            $contratos = Contrato::
            join('servicios', 'servicios.id', '=', 'contratos.servicio_id')->
            join('clientes', 'clientes.id', '=', 'contratos.cliente_id')->
            join('personas', 'personas.id', '=', 'clientes.persona_id')->
            select(
                'contratos.id as contrato_id',
                'contratos.consecutivo',
                'contratos.origen',
                'contratos.destino',
                'contratos.contratofirmado',
                'personas.nombre',
                'personas.apellido',
                'servicios.servicio'
            )->
            where('consecutivo','LIKE','%'.$this->search.'%')->
            latest('contratos.id')->
            paginate(10);

            return view('livewire.especiales.contrato-index',compact('contratos'));

    }
}
