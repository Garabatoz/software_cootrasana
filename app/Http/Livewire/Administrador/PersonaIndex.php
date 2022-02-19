<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Persona;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class PersonaIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $personas = Persona::where('nombre','LIKE', '%' .$this->search. '%')->
        orWhere('cedula','LIKE', '%' .$this->search. '%')->
        orWhere('email','LIKE', '%' .$this->search. '%')->
        latest('id')->
        paginate(10);

        return view('livewire.administrador.persona-index',compact('personas'));
    }
}
