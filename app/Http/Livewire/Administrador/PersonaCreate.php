<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\Persona;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;

class PersonaCreate extends Component
{
    //! COMPONENTES
    use WithFileUploads;
    use AuthorizesRequests;
    //! INFORMACIÓN DE PERSONAS
    public $cedula,$nombre,$apellido,$fijo,$celular,$direccion,$municipio,$barrio,$fechanac,$email;
    //! INFORMACIÓN DE CONDUCTORES
    public $nrolicencia,$fvencimiento,$fingreso;
    //! INFORMACIÓN DE USUARIOS
    public $password;
    //! OPCIONES DE FORMULARIO
    public $rolCliente,$rolUsuario,$rolConductor, $roles = [],$listaRoles;
    //! CONTROL DE VALIDACIONES
     protected $rules =
    [
        'cedula' => 'required|max:9999999999|numeric',
        'nombre' => 'required',
        'apellido' => 'required',
        'fijo' => 'required',
        'celular' => 'required|digits:10',
        'direccion' => 'required',
        'municipio' => 'required',
        'barrio' => 'required',
        'email' => 'required|email',
        'fechanac' => 'required'
    ];
    protected $rulesUsuario =
    [
        'password' => 'required'
    ];
    protected $rulesConductor =
    [
        'nrolicencia' => 'required',
        'fvencimiento' => 'required',
        'fingreso'=> 'required'
    ];
    protected $validationAttributes = [
        'fijo' => 'teléfono fijo',
        'fechanac' => 'fecha de nacimiento',
    ];
    protected $messages = [
        'cedula.max' => 'La cédula no puede tener mas de 10 números.',
        'celular.digits' => 'El campo celular debe tener 10 dígitos.',
        'email.email' => 'Debe colocar una dirección de correo válida.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    //! MÉTODO INICIAL
    public function mount()
    {
        $this->authorize('administrador.personas.create');
        $this->listaRoles = Role::all();
    }
    //! FUNCIONES DEL MÓDULO
    public function store()
    {
        if($this->rolUsuario == 'usuario' && $this->rolConductor == null)
        {
            $val = Arr::collapse([$this->rules, $this->rulesUsuario]);
            $this->validate($val);
        }
        elseif($this->rolConductor == 'conductor' && $this->rolUsuario == null)
        {
            $val = Arr::collapse([$this->rules, $this->rulesConductor]);
            $this->validate($val);
        }
        elseif($this->rolConductor == 'conductor' && $this->rolUsuario == 'usuario')
        {
            $val = Arr::collapse([$this->rules, $this->rulesConductor,$this->rulesUsuario]);
            $this->validate($val);
        }
        $this->validate($this->rules);

        $persona = Persona::create
        ([
            'cedula' =>$this->cedula,
            'nombre' =>$this->nombre,
            'apellido' => $this->apellido,
            'fijo' => $this->fijo,
            'celular' => $this->celular,
            'direccion' => $this->direccion,
            'municipio' => $this->municipio,
            'barrio' => $this->barrio,
            'fechanac' => $this->fechanac,
            'email' => $this->email
        ]);
        if($this->rolUsuario=='usuario')
        {
            $usuario = User::create
            ([
                'name' => $this->nombre,
                'email' => $this->email,
                'password' => bcrypt($this->password)
            ]);
            $usuario->roles()->sync($this->roles);
         }
        if($this->rolConductor=='conductor')
        {
            Conductor::create
            ([
                'nrolicencia' => $this->nrolicencia,
                'fvencimiento' => $this->fvencimiento,
                'fingreso' => $this->fingreso,
                'persona_id' => $persona->id
            ]);
        }
        if($this->rolCliente=='cliente')
        {
            Cliente::create
            ([
                'persona_id' => $persona->id,
                'tipoCliente_id' => 1,
            ]);
        }

        Alert::toast('Persona guardada correctamente','success');
        return redirect()->route('administrador.personas.index');
    }
    public function render()
    {
        return view('livewire.administrador.persona-create');
    }
}
