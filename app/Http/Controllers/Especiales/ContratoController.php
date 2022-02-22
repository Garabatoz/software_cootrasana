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
                'contratos.tarifa',
                'contratos.nombreResponsable',
                'contratos.cedulaResponsable',
                'contratos.contactoResponsable',
                'personas.cedula',
                'personas.nombre',
                'personas.apellido',
                'personas.direccion',
                'personas.municipio',
                'personas.fijo',
                'personas.celular',
                'personas.email',
                'servicios.servicio'

            )->
            where('contratos.id',$contrato)->first();
        if($contratoImprimir->servicio == "Ocasional")
        {
            $pdf = PDF::loadView('especiales.contratos.pdfOcasional', ['contrato'=>$contratoImprimir]);
        }
        if($contratoImprimir->servicio == "Turismo")
        {
            $pdf = PDF::loadView('especiales.contratos.pdfTurismo', ['contrato'=>$contratoImprimir]);
        }
        if($contratoImprimir->servicio == "Escolar")
        {
            $pdf = PDF::loadView('especiales.contratos.pdfEscolar', ['contrato'=>$contratoImprimir]);
        }
        if($contratoImprimir->servicio == "Empresarial")
        {

            $pdf = PDF::loadView('especiales.contratos.pdfEmpresarial', ['contrato'=>$contratoImprimir]);
        }

        return $pdf->stream();
    }

    public function generarFuecPdf()
    {
        $pdf = PDF::loadView('especiales.contratos.pdfuec');
        return $pdf->stream();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
