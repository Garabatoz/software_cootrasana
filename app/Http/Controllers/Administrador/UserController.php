<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:administrador.usuarios.index');
    }
    public function index()
    {
        return view('administrador.usuarios.index');
    }
    public function create()
    {
        $roles = Role::all();
        return view('administrador.usuarios.create',compact('roles'));
    }
    public function store(Request $request)
    {

        $usuario = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

        $usuario->roles()->sync($request->roles);

        Alert::toast('Usuario guardado correctamente','success');

        return redirect()->route('administrador.usuarios.index');
    }
    public function edit(User $usuario)
    {

        $roles = Role::all();
        return view('administrador.usuarios.edit',compact('usuario','roles'));
    }
    public function update(Request $request, User $usuario)
    {
        $user = User::findOrFail($usuario->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password == null)
        {
            unset($request['password']);
        }
        else
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        $usuario->roles()->sync($request->roles);
        Alert::toast('Usuario actualizado correctamente','success');
        return redirect()->route('administrador.usuarios.index', $usuario);
    }
    public function destroy($id)
    {
        //
    }
}
