<?php

namespace App\Http\Livewire\Especiales;

use App\Models\Prueba;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class PruebaEdit extends Component
{

    public $prueba;

    public function mount(Prueba $prueba)
    {
        $this->prueba = $prueba;
    }


    //!Reglas de validación
    protected $rules =
    [
        'prueba.nombre' => 'required',
        'prueba.apellido' => 'required',
        'prueba.fnac' => 'required',
        'prueba.edad' => 'required'
    ];

    public function update()
    {
        $this->validate();
        $this->prueba->save();

        /* Alert::alert('Alerta', 'registro actualizado con Éxito', 'Type'); */

        /* alert()->success('Title','Lorem Lorem Lorem'); */

        toast('Your Post as been submited!','success');

        return redirect()->route('especiales.pruebas.index');
    }

    public function destroy()
    {

    }

    public function render()
    {
        return view('livewire.especiales.prueba-edit');
    }
}
