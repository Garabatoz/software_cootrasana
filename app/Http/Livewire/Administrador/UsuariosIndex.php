<?php

namespace App\Http\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class UsuariosIndex extends Component
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

        $usuarios = User::where('name','LIKE', '%' .$this->search. '%')->
        orWhere('email','LIKE', '%' .$this->search. '%')->
        paginate(10);

        return view('livewire.administrador.usuarios-index',compact('usuarios'));
    }
}
