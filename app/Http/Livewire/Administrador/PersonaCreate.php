<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\Persona;
use App\Models\User;
use Exception;
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
    public $username,$password;
    //! OPCIONES DE FORMULARIO
    public $rolCliente,$rolUsuario,$rolConductor, $roles = [],$listaRoles;
    //! CONTROL DE VALIDACIONES
     protected $rules =
    [
        'cedula' => 'required|max:9999999999|numeric|unique:personas',
        'nombre' => 'required|max:15',
        'apellido' => 'required|max:15',
        'fijo' => 'required|max:9999999999|numeric',
        'celular' => 'required|digits:10',
        'direccion' => 'required|max:50',
        'municipio' => 'required|max:20',
        'barrio' => 'required|max:20',
        'email' => 'required|email|max:50|unique:personas',
        'fechanac' => 'required'
    ];
    protected $rulesUsuario =
    [
        'username' => 'required|unique:users',
        'email' => 'required|unique:users',
        'roles' => 'required',
        'password' => 'required',
    ];
    protected $rulesConductor =
    [
        'nrolicencia' => 'required|max:20',
        'fvencimiento' => 'required',
        'fingreso'=> 'required'
    ];
    protected $validationAttributes = [
        'fijo' => 'teléfono fijo',
        'fechanac' => 'fecha de nacimiento',
        'username' => 'nombre de usuario',
        'password' => 'contraseña',
        'nrolicencia' => 'licencia',
        'fvencimiento' => 'fecha de vencimiento',
        'fingreso' => 'fecha de ingreso',
    ];
    protected $messages = [
        'cedula.max' => 'La cédula no puede tener mas de 10 números.',
        'cedula.unique' => 'Esta cédula ya esta registrada.',

        'celular.digits' => 'El campo celular debe tener 10 dígitos.',

        'email.email' => 'Debe colocar una dirección de correo válida.',
        'email.unique' => 'Este correo electrónico ya está registrado.',

        'username.unique' => 'Este nombre de usuario ya existe.',

        'roles.required' => 'Debe elegir por lo menos un rol para este usuario.',


    ];
    public function updatedCedula()
    {
        $this->validate([
            'cedula' => 'required|max:9999999999|numeric|unique:personas'
          ]);
    }
    public function updatedUsername()
    {
        $this->validate([
            'username' => 'required|unique:users',
          ]);
    }
    public function updatedEmail()
    {
        $this->validate([
            'email' => 'required|email|max:50|unique:personas',
          ]);
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
        if($this->rolConductor == null && $this->rolCliente == null && $this->rolUsuario == null)
        {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Debe seleccionar un tipo de persona']);
        }
        else
        {
        $this->authorize('administrador.personas.create');
        try
        {
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
                'email' => $this->email,
                'status' => '1',
            ]);
        }
        catch(Exception $e)
        {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                return false;
        }
        if($this->rolUsuario=='usuario')
        {
            $this->authorize('administrador.personas.createUsuario');
            try{
                $usuario = User::create
                ([
                    'name' => $this->nombre.' '.$this->apellido,
                    'email' => $this->email,
                    'status' => '1',
                    'username' => $this->username,
                    'persona_id' => $persona->id,
                    'password' => bcrypt($this->password)
                ]);
                $usuario->roles()->sync($this->roles);

            }catch(Exception $e)
            {
                $persona->delete();
                $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                return false;
            }

         }
        if($this->rolConductor=='conductor')
        {
            $this->authorize('administrador.personas.createConductor');
            try
            {
                Conductor::create
                ([
                    'nrolicencia' => $this->nrolicencia,
                    'fvencimiento' => $this->fvencimiento,
                    'fingreso' => $this->fingreso,
                    'status' => '1',
                    'persona_id' => $persona->id
                ]);
            }
            catch(Exception $e)
            {
                $persona->delete();
                $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                return false;
            }
        }
        if($this->rolCliente=='cliente')
        {
            $this->authorize('administrador.personas.createCliente');
            try{
            Cliente::create
            ([
                'persona_id' => $persona->id,
                'tipoCliente_id' => 1,
            ]);
        }
        catch(Exception $e)
        {
            $persona->delete();
            $this->dispatchBrowserEvent('alert',
            ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
            return false;
        }
        }
        Alert::toast('Persona guardada correctamente','success');
        return redirect()->route('administrador.personas.index');
    }
    }
    public function render()
    {
        return view('livewire.administrador.persona-create');
    }
}
