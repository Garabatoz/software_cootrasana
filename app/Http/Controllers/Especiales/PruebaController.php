<?php

namespace App\Http\Controllers\Especiales;

use App\Http\Controllers\Controller;
use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{

    public function index()
    {
        return view('especiales.pruebas.index');
    }
    public function create()
    {
        return view('especiales.pruebas.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit(Prueba $prueba)
    {
        return view('especiales.pruebas.edit',compact('prueba'));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {

    }
}
