<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\Persona;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class PersonaEdit extends Component
{
    //! COMPONENTES
    use WithFileUploads;
    use AuthorizesRequests;
    //! INFORMACIÓN DE PERSONAS
    public $cedula,$nombre,$apellido,$fijo,$celular,$direccion,$municipio,$barrio,$fechanac,$email;
    //! OPCIONES DE FORMULARIO
    public $rolCliente,$rolUsuario,$rolConductor, $roles = [],$listaRoles,$persona;
    //! INFORMACIÓN DE CONDUCTORES
    public $idConductor,$nrolicencia,$fvencimiento,$fingreso,$statusConductor;
    //! INFORMACIÓN DE USUARIOS
    public $idUsuario,$username,$password,$statusUsuario;
    //! INFORMACIÓN DE CLIENTES
    public $idCliente;
    //! CONTROL DE VALIDACIONES
    protected function rules()
        {
            $rules =
            [
                'cedula' => 'required|max:9999999999|numeric|unique:personas,cedula,'.$this->persona->id,
                'nombre' => 'required|max:15',
                'apellido' => 'required|max:15',
                'fijo' => 'required|max:9999999999|numeric',
                'celular' => 'required|digits:10',
                'direccion' => 'required|max:50',
                'municipio' => 'required|max:20',
                'barrio' => 'required|max:20',
                'email' => 'required|email|max:50',
                'fechanac' => 'required'
            ];
            return $rules;
        }
    protected function rulesUsuario()
        {
            $rulesUsuario =
            [
                'username' => 'required|unique:users,username,'.$this->idUsuario,
                'email' => 'required|unique:users,email,'.$this->idUsuario
            ];
            return $rulesUsuario;
        }
    protected function rulesConductor()
        {
            $rulesConductor =
            [
                'nrolicencia' => 'required|max:20',
                'fvencimiento' => 'required',
                'fingreso'=> 'required'
            ];
            return $rulesConductor;
        }

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


    ];
    public function updatedCedula()
    {
        $this->validate([
            'cedula' => 'required|max:9999999999|numeric|unique:personas,cedula,'.$this->persona->id,
          ]);
    }
    public function updatedUsername()
    {
        $this->validate([
            'username' => 'required|unique:users,username,'.$this->idUsuario,
          ]);
    }
    public function updatedEmail()
    {
        $this->validate([
            'email' => 'required|email|max:50|unique:personas,email,'.$this->persona->id,
          ]);
    }
    //! MÉTODO INICIAL
    public function mount(Persona $persona)
    {
        $this->authorize('administrador.personas.edit');
        $this->persona = $persona;
        $this->cedula = $persona->cedula;
        $this->nombre = $persona->nombre;
        $this->apellido = $persona->apellido;
        $this->fijo = $persona->fijo;
        $this->celular = $persona->celular;
        $this->direccion = $persona->direccion;
        $this->municipio = $persona->municipio;
        $this->barrio = $persona->barrio;
        $this->email = $persona->email;
        $this->fechanac = $persona->fechanac;
        $this->validarRol();
        $this->listaRoles = Role::all();

    }
    //! FUNCIONES DEL MODULO
    public function update()
    {
        if($this->rolUsuario == 'usuario' && $this->rolConductor == null)
        {
            $val = Arr::collapse([$this->rules(), $this->rulesUsuario()]);
            $this->validate($val);
        }
        elseif($this->rolConductor == 'conductor' && $this->rolUsuario == null)
        {
            $val = Arr::collapse([$this->rules(), $this->rulesConductor()]);
            $this->validate($val);
        }
        elseif($this->rolConductor == 'conductor' && $this->rolUsuario == 'usuario')
        {
            $val = Arr::collapse([$this->rules(), $this->rulesConductor(),$this->rulesUsuario()]);
            $this->validate($val);
        }
        $this->validate($this->rules());
        if($this->rolConductor == null && $this->rolCliente == null && $this->rolUsuario == null)
        {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'error',  'message' => 'Debe seleccionar un tipo de persona']);
        }
        else
        {
            $this->authorize('administrador.personas.edit');
            try
            {
                $persona = Persona::find($this->persona->id);
                $persona->cedula  = $this->cedula;
                $persona->nombre  = $this->nombre;
                $persona->apellido  = $this->apellido;
                $persona->fijo  = $this->fijo;
                $persona->celular  = $this->celular;
                $persona->direccion  = $this->direccion;
                $persona->municipio  = $this->municipio;
                $persona->barrio  = $this->barrio;
                $persona->fechanac  = $this->fechanac;
                $persona->email  = $this->email;
                $persona->save();

                $this->dispatchBrowserEvent('alert',
                    ['type' => 'success',  'message' => 'Persona Actualizada']);

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

                if(!$this->idUsuario==null)
                {

                    try{
                        $usuario = User::find($this->idUsuario);
                        $usuario->name  = $this->nombre.''.$this->apellido;
                        $usuario->email = $this->email;
                        $usuario->username = $this->username;

                        if($this->password == null)
                        {
                            $usuario->password = $usuario->password;
                        }
                        else
                        {
                            $usuario->password = bcrypt($this->password);
                        }
                        if($this->statusUsuario == null)
                        {
                            $usuario->status = 1;
                        }
                        elseif($this->statusUsuario == '0')
                        {
                            $usuario->status = 0;
                        }
                        $usuario->persona_id = $this->persona->id;
                        $usuario->save();
                        $usuario->roles()->sync($this->roles);
                        $this->dispatchBrowserEvent('alert',
                        ['type' => 'success',  'message' => 'Usuario actualizado']);


                    }catch(Exception $e)
                    {
                        $this->dispatchBrowserEvent('alert',
                        ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                        return false;
                    }
                }
                else
                {
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
                        $this->dispatchBrowserEvent('alert',
                        ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                        return false;
                    }
                }

            }
            if($this->rolConductor=='conductor')
            {
                $this->authorize('administrador.personas.createConductor');

                if(!$this->idConductor==null)
                {
                    try{
                        $conductor = Conductor::find($this->idConductor);
                        $conductor->nrolicencia  = $this->nrolicencia;
                        $conductor->fvencimiento = $this->fvencimiento;
                        $conductor->fingreso = $this->fingreso;
                        if($this->statusConductor == null)
                        {
                            $conductor->status = 1;
                        }
                        elseif($this->statusConductor == '0')
                        {
                            $conductor->status = 0;
                        }
                        $conductor->persona_id = $this->persona->id;
                        $conductor->save();

                        $this->dispatchBrowserEvent('alert',
                        ['type' => 'success',  'message' => 'Conductor actualizado']);


                    }catch(Exception $e)
                    {
                        $this->dispatchBrowserEvent('alert',
                        ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                        return false;
                    }
                }
                else
                {
                    try{
                        $conductor = Conductor::create
                        ([
                            'nrolicencia' => $this->nrolicencia,
                            'fvencimiento' => $this->fvencimiento,
                            'fingreso' => $this->fingreso,
                            'status' => '1',
                            'persona_id' => $persona->id
                        ]);

                    }catch(Exception $e)
                    {
                        $this->dispatchBrowserEvent('alert',
                        ['type' => 'error',  'message' => 'Ocurrio un error'.$e]);
                        return false;
                    }
                }

            }
        }
    }
    public function validarRol()
    {
        $user = User::where('persona_id',$this->persona->id)->first();
        $cliente = Cliente::where('persona_id',$this->persona->id)->first();
        $conductor = Conductor::where('persona_id',$this->persona->id)->first();
        if(is_object($user))
        {
            $this->authorize('administrador.personas.createUsuario');
            $this->rolUsuario = 'usuario';
            $this->idUsuario = $user->id;
            $this->username = $user->username;
            foreach($user->roles as $rol)
            {
                $this->roles[] = $rol->id;
            }
            if($user->status == 0)
            {
                $this->statusUsuario= '0';
            }
            elseif($user->status == 1)
            {
                $this->statusUsuario = null;
            }
        }
        if(is_object($cliente))
        {
            $this->authorize('administrador.personas.createCliente');
            $this->rolCliente = 'cliente';
            $this->idCliente = $cliente->id;

        }
        if(is_object($conductor))
        {
            $this->authorize('administrador.personas.createConductor');
            $this->rolConductor = 'conductor';
            $this->idConductor = $conductor->id;
            $this->nrolicencia = $conductor->nrolicencia;
            $this->fvencimiento = $conductor->fvencimiento;
            $this->fingreso = $conductor->fingreso;
            if($conductor->status == 0)
            {
                $this->statusConductor = '0';
            }
            elseif($conductor->status == 1)
            {
                $this->statusConductor = null;
            }

        }
    }

    public function render()
    {
        return view('livewire.administrador.persona-edit');
    }
}
