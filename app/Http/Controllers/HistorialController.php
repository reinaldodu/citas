<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Agenda;


class HistorialController extends Controller
{
    public function index()
    {
        //Variable citas agendadas
        $citas_agendadas=Cita::count();
        //citas agendadas del dia de acuerdo al campo create_at
        $citas_agendadas_dia=Cita::whereDate('created_at', date('Y-m-d'))->count();
        //citas agendadas de la semana de acuerdo al campo create_at
        $citas_agendadas_semana=Cita::whereBetween('created_at', [date('Y-m-d', strtotime('monday this week')), date('Y-m-d', strtotime('sunday this week'))])->count();
        //citas agendadas del mes de acuerdo al campo create_at
        $citas_agendadas_mes=Cita::whereMonth('created_at', date('m'))->count();


        //Variable citas atendidas
        $citas_atendidas=Cita::where('estado', 2)->count();
        //citas atendidas del dia de acuerdo al campo create_at
        $citas_atendidas_dia=Cita::where('estado', 2)->whereDate('created_at', date('Y-m-d'))->count();
        //citas atendidas de la semana de acuerdo al campo create_at
        $citas_atendidas_semana=Cita::where('estado', 2)->whereBetween('created_at', [date('Y-m-d', strtotime('monday this week')), date('Y-m-d', strtotime('sunday this week'))])->count();
        //citas atendidas del mes de acuerdo al campo create_at
        $citas_atendidas_mes=Cita::where('estado', 2)->whereMonth('created_at', date('m'))->count();
        
        //Variable citas canceladas
        $citas_canceladas=Cita::where('estado', 3)->count();
        //citas canceladas del dia de acuerdo al campo create_at
        $citas_canceladas_dia=Cita::where('estado', 3)->whereDate('updated_at', date('Y-m-d'))->count();
        //citas canceladas de la semana de acuerdo al campo create_at
        $citas_canceladas_semana=Cita::where('estado', 3)->whereBetween('updated_at', [date('Y-m-d', strtotime('monday this week')), date('Y-m-d', strtotime('sunday this week'))])->count();
        //citas canceladas del mes de acuerdo al campo create_at
        $citas_canceladas_mes=Cita::where('estado', 3)->whereMonth('updated_at', date('m'))->count();

        
        $procedimientos=Cita::where('estado', 2)->whereHas('agenda', function($query){
            $query->where('tipo', 2);
        })->count();
        // contar procedimientos realizados del dia de acuerdo al campo create_at
        $procedimientos_dia=Cita::where('estado', 2)->whereHas('agenda', function($query){
            $query->where('tipo', 2);
        })->whereDate('created_at', date('Y-m-d'))->count();
        //procedimientos realizados de la semana de acuerdo al campo create_at
        $procedimientos_semana=Cita::where('estado', 2)->whereHas('agenda', function($query){
            $query->where('tipo', 2);
        })->whereBetween('created_at', [date('Y-m-d', strtotime('monday this week')), date('Y-m-d', strtotime('sunday this week'))])->count();
        //procedimientos realizados del mes de acuerdo al campo create_at
        $procedimientos_mes=Cita::where('estado', 2)->whereHas('agenda', function($query){
            $query->where('tipo', 2);
        })->whereMonth('created_at', date('m'))->count();



        $citas_agendadas= [
            'citas_agendadas' => $citas_agendadas,
            'citas_agendadas_dia' => $citas_agendadas_dia,
            'citas_agendadas_semana' => $citas_agendadas_semana,
            'citas_agendadas_mes' => $citas_agendadas_mes,
        ];

        $citas_atendidas= [
            'citas_atendidas' => $citas_atendidas,
            'citas_atendidas_dia' => $citas_atendidas_dia,
            'citas_atendidas_semana' => $citas_atendidas_semana,
            'citas_atendidas_mes' => $citas_atendidas_mes,
        ];

        
        $citas_canceladas= [
            'citas_canceladas' => $citas_canceladas,
            'citas_canceladas_dia' => $citas_canceladas_dia,
            'citas_canceladas_semana' => $citas_canceladas_semana,
            'citas_canceladas_mes' => $citas_canceladas_mes,
        ];

        $procedimientos= [
            'procedimientos' => $procedimientos,
            'procedimientos_dia' => $procedimientos_dia,
            'procedimientos_semana' => $procedimientos_semana,
            'procedimientos_mes' => $procedimientos_mes,
        ];



        return view('admin.historial.index', compact('citas_agendadas', 'citas_atendidas','citas_canceladas','procedimientos'));
    }

    public function reporte($tipo) {
        
        if ($tipo == 'agendadas_ttl') {
            $citas = Cita::paginate(10)->withQueryString();
            $tipo_reporte = 'Total citas agendadas';
        } else if ($tipo == 'agendadas_dia') {
            $citas = Cita::whereDate('created_at', date('Y-m-d'))->paginate(10)->withQueryString();
            $tipo_reporte = 'Citas agendadas del dia';
        } else if ($tipo == 'agendadas_semana') {
            $citas = Cita::whereBetween('created_at', [date('Y-m-d', strtotime('monday this week')), date('Y-m-d', strtotime('sunday this week'))])->paginate(10)->withQueryString();
            $tipo_reporte = 'Citas agendadas de la semana';
        } else if ($tipo == 'agendadas_mes') {
            $citas = Cita::whereMonth('created_at', date('m'))->paginate(10)->withQueryString();
            $tipo_reporte = 'Total citas agendadas';
        } 
        //retornar vista
        return view('admin.historial.reporte', compact('citas', 'tipo_reporte'));
    }
}