<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StorePacientesPost;
use App\Http\Requests\UpdatePacientesPut;
use App\Models\Pacientes;
use Barryvdh\DomPDF\PDF;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
class PacientesController extends Controller
{
    protected $funcion = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Pacientes::orderBy('id', 'DESC');
        $pacientes = $pacientes->paginate(2)->appends(request()->except("page"));
        return Inertia::render('Pacientes/Index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Pacientes/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePacientesPost $request)
    {
    
    Pacientes::create($request->validated());
    
    return Redirect::route('pacientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $paciente)
    { 
        return Inertia::render('Pacientes/Show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $paciente)
    {
        return Inertia::render('Pacientes/Edit', compact('paciente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePacientesPut $request, Pacientes  $paciente)
    {
        $paciente->update($request->validated());

        return Redirect::route('pacientes.index',$paciente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $paciente)
    {
        $paciente->delete();

        return redirect::route('pacientes.index');
    }

//crear pdf

public function hematologia(Request $request)
    {
        $correo = $request->input('correo');
        $titulo = $request->input('titulo');
        $data["email"] = "$correo";
        $data["title"] = "$titulo";
        
        $id = $request->input('id');
        $fecha = $request->input('fecha');
        $nombre = $request->input('nombre');
        $variable = $request->input('variable');
        $paciente = Pacientes::find($id);
        $paciente->hematologias()->where('fecha','$fecha');
        $paciente->descartes;
        $paciente->frotis;
        $paciente->hematologiasc;
        $paciente->quimicas;
        $paciente->urianalisis;
        
        $pdf = app('dompdf.wrapper');
        $pdf->setPaper(array(0,0,612.00,920.00),'portrait');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('hematologia', compact('paciente','fecha','variable'));
        return $pdf->stream($nombre .'.pdf');
    }

    public function felina(Request $request)
    {
        $id = $request->input('id');
        $fecha = $request->input('fecha');
        $nombre= $request->input('nombre');
        $variable = $request->input('variable');
        $paciente = Pacientes::find($id);
        $paciente->hematologias()->where('fecha','$fecha');
        $paciente->descartes;
        $paciente->frotis;
        $paciente->hematologiasc;
        $paciente->quimicas;
        $paciente->urianalisis;
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('felina', compact('paciente','fecha','variable'));
        return $pdf->stream($nombre . '.pdf');
    }

    public function equino(Request $request)
    {
        $id = $request->input('id');
        $fecha = $request->input('fecha');
        $nombre= $request->input('nombre');
        $variable = $request->input('variable'); 
        $paciente = Pacientes::find($id);
        $paciente->hematologias()->where('fecha','$fecha','variable');
        $paciente->descartes;
        $paciente->frotis;
        $paciente->hematologiasc;
        $paciente->quimicas;
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('equino', compact('paciente','fecha','variable'));

        return $pdf->stream($nombre . '.pdf');
    }
    
}
