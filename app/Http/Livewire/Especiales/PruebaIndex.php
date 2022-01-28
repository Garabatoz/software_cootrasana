<?php

namespace App\Http\Livewire\Especiales;

use Livewire\Component;
use App\Models\Prueba;
use Livewire\WithPagination;

class PruebaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $listeners = ['destroy'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function destroy(Prueba $prueba)
    {
        $prueba->delete();

    }

    public function render()
    {

        $pruebas = Prueba::where('nombre','LIKE','%'.$this->search.'%')->paginate(10);

        return view('livewire.especiales.prueba-index',compact('pruebas'));
    }
}
