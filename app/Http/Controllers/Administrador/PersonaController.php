<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:administrador.personas.index');
    }

    public function index()
    {
        return view('administrador.personas.index');
    }

    public function create()
    {
        return view('administrador.personas.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Persona $persona)
    {
        return view('administrador.personas.edit',compact('persona'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
