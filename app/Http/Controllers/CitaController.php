<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Agenda;
use App\Models\Procedimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnvioMail;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //si se le envia el query string atendidas, se muestran las citas atendidas
        if(request()->query('atendidas') == 'si') {
            $citas = Cita::where('paciente_id', Auth()->user()->id)->where('estado', 2)->get();
            return view('citas.index', compact('citas'));
        } el
        
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
        //Se envía el email de confirmación al paciente
        $mailData=[
            "nombre"=>Auth()->user()->name,
            "fecha"=>$agenda->fecha,
            "hora"=>$agenda->hora,
            "procedimiento"=>$agenda->procedimiento->nombre,
            "medico"=>$agenda->medico->name
        ];
        Mail::to(Auth()->user()->email)->send(new EnvioMail($mailData));

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
        return view('citas.show',compact ('cita'));
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
        $fecha_min=\Carbon\Carbon::tomorrow()->format('Y-m-d');
        return view('citas.buscar', compact('procedimientos','fecha_min'));
       
    }

    //Ver las citas disponibles
    public function disponibles(Request $request)
    {
        //validar datos
        $request->validate([
            'fecha' => 'required|date|after:today',
            'procedimiento' => 'required',
        ]);
        
        //buscar citas disponibles por fecha y procedimiento
        $citas = Agenda::where('fecha', $request->fecha)
            ->where('procedimiento_id', $request->procedimiento)
            ->where('estado', 1)
            ->get();

        return view('citas.disponibles', compact('citas'));
    }


    public function cancelar(Cita $cita)
    {
        $cita->estado = 3;
        //Actualizamos la fecha update_at a la fecha actual
        $cita->touch();
        $cita->save();
        $agenda = Agenda::find($cita->agenda_id);
        $agenda->estado = 1;
        $agenda->save();
        return redirect()->route('citas.index')->with('info', 'La cita se canceló con éxito');
    }

    //funcion para ver las citas del día del médico autenticado
    public function agenda()
    {
        $hoy=\Carbon\Carbon::today();
        $agendas=Agenda::where('fecha', $hoy)
                         ->where('medico_id', Auth()->user()->id)
                         ->get();
        return view('citas.agenda', compact ('agendas'));
    }

    public function atender(Cita $cita)
    {
        return view('citas.atender', compact('cita'));
    }

    public function historial()
    {
        $citas=Cita::where('estado',2)
                    ->whereHas('agenda',function($query){
                      $query->where('medico_id',Auth()->user()->id);
                    })->get();
        return view('citas.historial', compact('citas'));
    }

    public function registra(Request $request, Cita $cita)
    {
        $request->validate([
            'diagnostico'=>'required',
            'medicamento'=>'required',

        ]);

        $cita->update([
            'observacion'=>$request->observacion, 
            'diagnostico'=>$request->diagnostico,
            'medicamento'=>$request->medicamento,
            'estado'=>2
        ]);

        return redirect()->route('citas.agenda_dia');
    }

    public function detalle(Cita $cita)
    {
        return view('citas.detalle', compact('cita'));

    }

    // Buscar citas por procedimiento
    public function cita_procedimiento_buscar($procedimiento)
    {
        $citas=Cita::where('estado',1)
                    ->whereHas('agenda',function($query) use ($procedimiento){
                      $query->where('procedimiento_id',$procedimiento);
                    })->get();
        return view('citas.medico.create', compact('citas'));
    }

    public function cita_medico_crear()
    {
        $procedimientos = Procedimiento::all();
        return view('citas.medico.create', compact('procedimientos'));
    }

}
