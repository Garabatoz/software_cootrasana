<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use App\Models\Vehiculo;
use Livewire\WithPagination;

class VehiculoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $listeners = ['destroy'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function destroy(Vehiculo $vehiculos)
    {
        $vehiculos->delete();
    }

    public function render()
    {
        $vehiculos = Vehiculo::where('numinterno','LIKE','%'.$this->search.'%')->paginate(10);

        return view('livewire.administrador.vehiculo-index',compact('vehiculos'));
       
    }
}


