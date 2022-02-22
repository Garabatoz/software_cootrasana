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
        'placa' => 'required|numeric|digits_between:0,6',
        'modelo' => 'required|numeric|digits_between:0,4',
        'marca' => 'required|alpha|min:0|max:20',
        'clase' => 'required|alpha|min:0|max:20',
        'tarjetaop' => 'required|numeric||digits_between:0,20',
        'vencrtm' => 'required',
        'vencsoat' => 'required',
        'vencpreopera' => 'required',
        'slug' => 'required|numeric|digits_between:0,45',
        
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
            'slug' => $this->slug,
        ]);

     
        
        toast('Ha sido creado con exito!','success');

        return redirect()->route('administrador.vehiculos.index');
    }
   
}