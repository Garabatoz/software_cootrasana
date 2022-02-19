<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:administrador.roles.index');
    }

    public function index()
    {
        $roles = Role::all();
        return view('administrador.roles.index',compact('roles'));
    }
    public function create()
    {
        $permissions = Permission::all();
        return view('administrador.roles.create',compact('permissions'));
    }
    public function store(Request $request)
    {
        $rol = Role::create(['name' => $request->name]);
        $rol->permissions()->sync($request->permissions);
        Alert::toast('Rol guardado correctamente','success');
        return redirect()->route('administrador.roles.index');
    }
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('administrador.roles.edit',compact('role','permissions'));
    }
    public function update(Request $request, Role $role)
    {
        $request->validate(
            [
                'name' => 'required'
            ]
            );

            $role->update($request->all());
            $role->permissions()->sync($request->permissions);
            Alert::toast('Rol actualizado correctamente','success');
            return redirect()->route('administrador.roles.index');
    }
    public function destroy($id)
    {
        //
    }
}
