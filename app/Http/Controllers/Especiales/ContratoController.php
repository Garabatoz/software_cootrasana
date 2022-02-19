<?php

namespace App\Http\Controllers\Especiales;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Servicio;
use Barryvdh\DomPDF\Facade\Pdf;


class ContratoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:especiales.contratos.index');
    }
    public function index()
    {
        return view('especiales.contratos.index');
    }
    public function generarContratoPdf($contrato)
    {

        $contratoImprimir = Contrato::
            join('servicios', 'servicios.id', '=', 'contratos.servicio_id')->
            join('clientes', 'clientes.id', '=', 'contratos.cliente_id')->
            join('personas', 'personas.id', '=', 'clientes.persona_id')->
            select(
                'contratos.id as contrato_id',
                'contratos.consecutivo',
                'contratos.origen',
                'contratos.destino',
                'contratos.contratofirmado',
                'contratos.fsalida',
                'contratos.nrobebes',
                'contratos.nroniños',
                'contratos.nroadultos',
                'contratos.nromayores',
                'contratos.nroincapac',
                'contratos.totalpasajeros',
                'contratos.fregreso',
                'contratos.fregreso',
                'contratos.tarifa',
                'personas.cedula',
                'personas.nombre',
                'personas.apellido',
                'personas.direccion',
                'servicios.servicio'
            )->
            where('contratos.id',$contrato)->first();

        $pdf = PDF::loadView('especiales.contratos.pdf', ['contrato'=>$contratoImprimir]);
        return $pdf->stream();
    }
    public function create()
    {
        return view('especiales.contratos.create');
    }
    public function store(Request $request)
    {

    }
    public function edit($id)
    {
        return view('especiales.contratos.edit');
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
