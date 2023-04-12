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
        $agendas = Agenda::paginate(10);
        return view('admin.agendas.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = User::where('rol_id', 2)->get();
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

            //validar que el medico no tenga agenda en la misma fecha y hora
        $agenda = Agenda::where('medico_id', $request->medico)
        ->where('fecha', $request->fecha)
        ->where('hora', '>=', $request->hora_inicial)
        ->where('hora', '<=', $request->hora_final)
        ->first();
                if ($agenda) {
                    return redirect()->back()->with('error', 'El médico ya tiene una agenda en la fecha y hora seleccionada');
            }

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
        $medicos= User::where('rol_id', 2)->get();
        $procedimientos= Procedimiento::all();
        return view('admin.agendas.edit', compact('agenda', 'medicos', 'procedimientos'));
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
        $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'medico_id' => 'required',
            'procedimiento_id' => 'required',
        ]);
        $agenda->update($request->all());
        return redirect()->route('agendas.index')->with('success', 'Agenda actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agendas.index')->with('success', 'Agenda eliminada correctamente');
    }
    
    public function agendas_disponibles(Procedimiento $procedimiento)
    {
        $agendas = Agenda::where('procedimiento_id', $procedimiento->id)
        ->where('estado', 1)
        ->where('tipo', 2)
        ->where('medico_id', auth()->user()->id)
        ->where('fecha', '>', date('Y-m-d'))
        ->get();
        //retornar un json
        return response()->json($agendas);
    }
}
