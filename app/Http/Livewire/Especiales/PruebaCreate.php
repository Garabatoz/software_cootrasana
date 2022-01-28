<?php

namespace App\Http\Livewire\Especiales;

use Livewire\Component;
use App\Models\Prueba;
use UxWeb\SweetAlert\SweetAlert;
use RealRashid\SweetAlert\Facades\Alert;

class PruebaCreate extends Component
{
    //! Definimos variables para el formulario
    public $nombre,$apellido,$fnac,$edad;

    public function render()
    {
        return view('livewire.especiales.prueba-create');
    }
    public function store()
    {
        Prueba::create
        ([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'fnac' => $this->fnac,
            'edad' => $this->edad,

        ]);
        session()->flash('flash.banner','Prueba creada con Éxito');
        session()->flash('flash.bannerStyle','success');

        Alert::alert('Title', 'Message', 'Type');

        /* alert()->success('Title','Lorem Lorem Lorem'); */

        /* toast('Your Post as been submited!','success'); */

        return redirect()->route('especiales.pruebas.index');
        /* return redirect()->back(); */
    }
}
