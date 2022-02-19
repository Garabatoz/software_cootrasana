<?php

namespace App\Http\Livewire\Especiales;

use App\Models\Conductor;
use App\Models\Contrato;
use App\Models\Persona;
use App\Models\Servicio;
use App\Models\Vehiculo;
use Dompdf\Canvas;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContratoCreate extends Component
{
    use AuthorizesRequests;

    //! COMPONENTES
    use WithFileUploads;
    //!INFORMACIÓN DEL CONTRATO
    public $fexpedicion,$servicio_id=null,$consecutivo=null;
    //! INFORMACIÓN DEL CLIENTE
    public $cliente_id=null,$cedula,$nombre,$apellido,$direccion,$fijo,$celular;
    //! INFORMACIÓN DE LA RUTA
    public $fsalida,$fregreso,$origen,$destino,$nombreResponsable,$cedulaResponsable,$contactoResponsable,$tarifa,$nrovehiculos;
    //! INFORMACIÓN DE PASAJEROS
    public $nrobebes=0,$nroniños=0,$nroadultos=0,$nromayores=0,$nroincapac=0,$totalPasajeros=0,$observaciones,$listapasajeros;
    //! VEHÍCULOS DEL CONTRATO
    public $vehiculosContrato = [],$vehiculosContratoId = [],$vehiculo_id = null;
    //! CONDUCTORES DEL CONTRATO
    public $conductoresContrato = [],$conductoresContratoId = [],$conductor_id = null;
    //! CONSULTAS EN BASE DE DATOS
    public $servicios,$clientes,$vehiculos,$opcion,$conductors;


    protected $rules =
    [
        'servicio_id' => 'required',
        'consecutivo' => 'required',
        'fsalida' => 'required',
        'fregreso' => 'required',
        'tarifa' => 'required|numeric|min:10000',
        'origen' => 'required',
        'destino' => 'required',
        'nombreResponsable' => 'required',
        'cedulaResponsable' => 'required|numeric|max:9999999999',
        'contactoResponsable' => 'required|numeric|max:9999999999',
        'nrovehiculos' => 'required|numeric|min:1|max:9999',
        'nrobebes' => 'required',
        'nroniños' => 'required|numeric|min:0|max:999',
        'nromayores' => 'required|numeric|min:0|max:999',
        'nroadultos' => 'required|numeric|min:0|max:999',
        'nroincapac' => 'required|numeric|min:0|max:999',
        'listapasajeros' => 'required|max:2048',
        'observaciones' => 'required',

    ];

    public function render()
    {
        $this->getInfoClientes();
        $this->totalPasajeros();
        return view('livewire.especiales.contrato-create');
    }
    public function mount()
    {
        $this->authorize('especiales.contratos.create');
        $this->llenarCombos();
        $this->getfechaExpedicion();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function store()
    {
        $this->validate();
        $listapasajeros = $this->listapasajeros->store('pasajeros_contratos');

        $contrato = Contrato::create
        ([
            'fexpedicion' =>$this->fexpedicion,
            'consecutivo' =>$this->consecutivo,
            'tarifa' => $this->tarifa,
            'origen' => $this->origen,
            'destino' => $this->destino,
            'nombreResponsable' => $this->nombreResponsable,
            'cedulaResponsable' => $this->cedulaResponsable,
            'contactoResponsable' => $this->contactoResponsable,
            'nrovehiculos' => $this->nrovehiculos,
            'nrobebes' => $this->nrobebes,
            'nroniños' => $this->nroniños,
            'totalpasajeros' => $this->totalPasajeros,
            'fsalida' => $this->fsalida,
            'fregreso' => $this->fregreso,
            'nromayores' => $this->nromayores,
            'nroadultos' => $this->nroadultos,
            'nroincapac' => $this->nroincapac,
            'listapasajeros' => $listapasajeros,
            'observaciones' => $this->observaciones,
            'cliente_id' => $this->cliente_id,
            'servicio_id' => $this->servicio_id
        ]);

        $contrato->conductors()->attach($this->conductoresContratoId);
        $contrato->vehiculos()->attach($this->vehiculosContratoId);


        Alert::toast('Contrato guardado de manera correcta','success');
        return redirect()->route('especiales.contratos.index');
    }
    public function llenarCombos()
    {
        $this->servicios = Servicio::pluck('servicio','id');
        $this->vehiculos = Vehiculo::all();
        $this->clientes = Persona::
            join('clientes', 'clientes.persona_id', '=', 'personas.id')
           ->get();
        $this->conductors = Persona::
        join('conductors', 'conductors.persona_id', '=', 'personas.id')
       ->get();
    }
    public function getFechaExpedicion()
    {
        $this->fexpedicion = now()->format('Y-m-d');
    }
    public function getInfoClientes()
    {
        if($this->cliente_id == null)
           {
            $this->cedula = null;
            $this->nombre = null;
            $this->apellido = null;
            $this->direccion = null;
            $this->fijo = null;
            $this->celular = null;
           }
           else
           {
            $infoClientes = Persona::
                join('clientes', 'clientes.persona_id', '=', 'personas.id')
            ->where('clientes.id',$this->cliente_id)->first();


            $this->cedula = $infoClientes->cedula;
            $this->nombre = $infoClientes->nombre;
            $this->apellido = $infoClientes->apellido;
            $this->direccion = $infoClientes->direccion;
            $this->fijo = $infoClientes->fijo;
            $this->celular = $infoClientes->celular;

           }
    }
    public function datosResponsable()
    {
        if($this->opcion == "SI")
        {
            $this->cedulaResponsable = $this->cedula;
            $this->nombreResponsable = $this->nombre." ".$this->apellido;
            $this->contactoResponsable = $this->celular;
        }
        else
        {
            $this->cedulaResponsable = null;
            $this->nombreResponsable = null;
            $this->contactoResponsable = null;
        }
    }
    public function totalPasajeros()
    {
        if(!is_numeric($this->nrobebes))
        {
            $this->nrobebes=0;
        }
        if(!is_numeric($this->nroniños))
        {
            $this->nroniños=0;
        }
        if(!is_numeric($this->nroadultos))
        {
            $this->nroadultos=0;
        }
        if(!is_numeric($this->nromayores))
        {
            $this->nromayores=0;
        }
        if(!is_numeric($this->nroincapac))
        {
            $this->nroincapac=0;
        }
        $this->totalPasajeros = $this->nrobebes + $this->nroniños + $this->nroadultos + $this->nromayores + $this->nroincapac;
    }

    public function consecutivos()
    {
        $contratos = Contrato::where('servicio_id',$this->servicio_id)->latest('id')->first();
        if($contratos)
        {
            $this->consecutivo = $contratos->consecutivo+1;
        }
        else
        {
            $this->consecutivo = "0000";
        }
    }
    public function addVehiculo()
    {
        if($this->vehiculo_id == null)
        {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Debe seleccionar un vehiculo']);
        }
        else
        {
            $vehiculos = Vehiculo::find($this->vehiculo_id);
            $id = $vehiculos->id;
            $numinterno = $vehiculos->numinterno;
            $placa = $vehiculos->placa;
            $modelo = $vehiculos->modelo;
            $marca = $vehiculos->marca;
            $clase = $vehiculos->clase;
            $tarjetaop = $vehiculos->tarjetaop;


            $vehiculosContrato = array
            (
                'id' => $id,
                'numinterno' => $numinterno,
                'placa' => $placa,
                'modelo' => $modelo,
                'marca' => $marca,
                'clase' => $clase,
                'tarjetaop' => $tarjetaop
            );
            $vehiculosContratoId = array
            (
                'vehiculo_id' => $id
            );
            $this->vehiculosContrato[] = $vehiculosContrato;
            $this->vehiculosContratoId[] = $vehiculosContratoId;
            $this->dispatchBrowserEvent('alert',
                ['type' => 'success',  'message' => 'vehiculo agregado con éxito']);
            $this->resetInput();
        }

    }
    public function resetInput()
    {
        $this->vehiculo_id = '';
    }
    public function removerVehiculo($key)
    {
        unset($this->vehiculosContrato[$key]);
        $this->dispatchBrowserEvent('alert',
                ['type' => 'warning',  'message' => 'Se ha removido un vehículo de la lista']);

    }
    public function addConductor()
    {
        if($this->conductor_id == null)
        {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Debe seleccionar un conductor']);
        }
        else
        {

            $conductors = Persona::
                join('conductors', 'conductors.persona_id', '=', 'personas.id')
                ->where('conductors.id',$this->conductor_id)->first();

            $id = $conductors->id;
            $nombre = $conductors->nombre;
            $apellido = $conductors->apellido;
            $fvencimiento = $conductors->fvencimiento;
            $fijo = $conductors->fijo;
            $celular = $conductors->celular;

            $conductoresContrato = array
            (
                'id' => $id,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'fvencimiento' => $fvencimiento,
                'fijo' => $fijo,
                'celular' => $celular,
            );
            $conductoresContratoId = array
            (
                'conductor_id' => $id
            );
            $this->conductoresContrato[] = $conductoresContrato;
            $this->conductoresContratoId[] = $conductoresContratoId;
            $this->dispatchBrowserEvent('alert',
                ['type' => 'success',  'message' => 'Conductor agregado con éxito']);
            $this->resetInput();
        }
    }
    public function removerConductor($key)
    {
        unset($this->conductoresContrato[$key]);
        $this->dispatchBrowserEvent('alert',
                ['type' => 'warning',  'message' => 'Se ha removido un conductor de la lista']);
    }


}
