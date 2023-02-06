<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Procedimiento;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::all();
        return view('admin.agendas.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = User::where('rol_id', 3)->get();
        $procedimientos= Procedimiento::all();
        return view('admin.agendas.create', compact('medicos', 'procedimientos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validaciones antes de guardar
        $request->validate([
            'fecha' => 'required',
            'duracion_cita' => 'required|numeric|min:15|max:120',
            // La hora inicial debe ser menor a la hora final
            'hora_inicial' => 'required',
            'hora_final' => 'required|after:hora_inicial',
            'medico' => 'required',
            'procedimiento' => 'required',
        ]);
        //Mensajes de errores personalizados
        $messages = [
            'hora_final.after' => 'La hora final debe ser mayor a la hora inicial',
        ];

        // Se hace la diferencia entre la hora inicial y la hora final para saber cuantas citas se pueden hacer
        $diferencia = strtotime($request->hora_final) - strtotime($request->hora_inicial);
        // Se divide la diferencia entre la duración de la cita para saber cuantas citas se pueden hacer
        $citas = round($diferencia / ($request->duracion_cita * 60));
        // se hace un for para crear las citas
        for ($i = 0; $i < $citas; $i++) {
            Agenda::create([
                'fecha' => $request->fecha,
                'hora' => date('H:i', strtotime($request->hora_inicial) + ($i * $request->duracion_cita * 60)),
                'medico_id' => $request->medico,
                'estado' => 1,
                'tipo' => $request->tipo,
                'procedimiento_id' => $request->procedimiento,
            ]);
        }
        return redirect()->route('agendas.index')->with('success', 'Agenda creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
