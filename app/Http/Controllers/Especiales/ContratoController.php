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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        //return view('especiales.contratos.pdf',compact('contratos'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  $request->validate
        ([
            'tarifa' => 'required|numeric|min:4',
            'origen' => 'required',
            'destino' => 'required',
            'responsable' => 'required',
            'cedulaResponsable' => 'required|numeric|max:9999999999',
            'contactoResponsable' => 'required|numeric|min:10',
            'nrovehiculos' => 'required|numeric',
            'nrobebes' => 'required|numeric',
            'nroniños' => 'required|numeric',
            'fsalida' => 'required',
            'fregreso' => 'required',
            'nromayores' => 'required|numeric',
            'nroadultos' => 'required|numeric',
            'nroincapac' => 'required|numeric',
            'nroadultos' => 'required|numeric',
            'observaciones' => 'required',
            'cliente_id' => 'required',
            'servicio_id' => 'required',
        ]); */

        Contrato::create($request->all());

        return redirect()->route('especiales.contratos.index')->with('info','Contrato creado con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('especiales.contratos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
