<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use App\Models\Vehiculo;
use UxWeb\SweetAlert\SweetAlert;
use RealRashid\SweetAlert\Facades\Alert;


class VehiculoCreate extends Component


{
    //! Definimos variables para el formulario
   public $numinterno,$placa,$modelo,$marca,$clase,$tarjetaop,$vencrtm,$vencsoat,$vencpreopera,$slug;
   public function render()
    {
        return view('livewire.administrador.vehiculo-create');
    }
    protected $rules =
    [
        'numinterno' => 'required|numeric|digits_between:0,4',
        'placa' =>  'required|min:0|max:6',
        'modelo' => 'required|numeric|digits_between:0,4',
        'marca' => 'required|alpha|min:0|max:20',
        'clase' => 'required|alpha|min:0|max:20',
        'tarjetaop' => 'required|numeric||digits_between:0,20',
        'vencrtm' => 'required',
        'vencsoat' => 'required',
        'vencpreopera' => 'required',
    ];
    protected $validationAttributes = [
        'numinterno' => 'vehiculo',
        'placa' => 'placa',
        'modelo' => 'modelo',
        'marca' => 'marca',
        'clase' => 'clase',
        'tarjetaop' => 'tarjeta de operación',
        'vencrtm' => 'revisión tecnico mecanica',
        'vencsoat' => 'soat',
        'vencpreopera' => 'preoperacional'
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
        }
    public function store()
    {
        Vehiculo::create
        ([
            'numinterno' => $this->numinterno,
            'placa' => $this->placa,
            'modelo' => $this->modelo,
            'marca' => $this->marca,
            'clase' => $this->clase,
            'tarjetaop' => $this->tarjetaop,
            'vencrtm' => $this->vencrtm,
            'vencsoat' => $this->vencsoat,
            'vencpreopera' => $this->vencpreopera,
        ]);



        toast('Ha sido creado con exito!','success');

        return redirect()->route('administrador.vehiculos.index');
    }

}
