<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Exception;
use App\Models\Vehiculo;
use UxWeb\SweetAlert\SweetAlert;
use RealRashid\SweetAlert\Facades\Alert;

class VehiculoEdit extends Component
{
    public $vehiculo;
   

    protected $rules =
    [
        'vehiculo.numinterno' => 'required|numeric|digits_between:0,4',
        'vehiculo.placa' => 'required|numeric|digits_between:0,6',
        'vehiculo.modelo' => 'required|numeric|digits_between:0,4',
        'vehiculo.marca' => 'required|alpha|min:0|max:20',
        'vehiculo.clase' => 'required|alpha|min:0|max:20',
        'vehiculo.tarjetaop' => 'required|numeric||digits_between:0,20',
        'vehiculo.vencrtm' => 'required',
        'vehiculo.vencsoat' => 'required',
        'vehiculo.vencpreopera' => 'required',
        'vehiculo.slug' => 'required|numeric|digits_between:0,45',
        
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    

    public function update()
    {
        $this->validate();
        try
            { 
                $this->vehiculo->save();
            }
            catch(Exception $e)
            {
                $this->dispatchBrowserEvent('alert',
                    ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                    return false;
            }

    

        toast('Ha sido editado con exito!','success');

        return redirect()->route('administrador.vehiculos.index');
    }
    public function mount(Vehiculo $vehiculo)
    {
        $this->vehiculo = $vehiculo;
    }
    public function render()
    {
        return view('livewire.administrador.vehiculo-edit');
    }
}
