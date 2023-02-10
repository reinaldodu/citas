<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Agenda;
use App\Models\Procedimiento;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar citas del paciente
        $citas = Cita::where('paciente_id', Auth()->user()->id)->get();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente_id= Auth()->user()->id;
        Cita::create([
            'paciente_id' => $paciente_id,
            'agenda_id' => $request->agenda_id,
            'estado' => 1,
        ]);
        //Actualizamos el estado de la agenda
        $agenda = Agenda::find($request->agenda_id);
        $agenda->estado = 2;
        $agenda->save();
        return redirect()->route('citas.index')->with('info', 'La cita se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }

    //Mostrar formulario para buscar citas
    public function buscar()
    {
        $procedimientos = Procedimiento::all();
        return view('citas.buscar', compact('procedimientos'));
       
    }

    //Ver las citas disponibles
    public function disponibles(Request $request)
    {
        //validar datos
        $request->validate([
            'fecha' => 'required|date',
            'procedimiento' => 'required',
        ]);
        
        //buscar citas disponibles por fecha y procedimiento
        $citas = Agenda::where('fecha', $request->fecha)
            ->where('procedimiento_id', $request->procedimiento)
            ->where('estado', 1)
            ->get();

        return view('citas.disponibles', compact('citas'));
    }
}
