<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Procedimiento;
use App\Models\Agenda;
use App\Models\Cita;

class DashboardController extends Controller
{
    public function index()
    {
        
        //***** Consultas si el usuario es administrador******/
        if(auth()->user()->rol_id == 1) {
            //Total de administradores
            $total_administradores = User::where('rol_id', 1)->count();
            //Total de médicos
            $total_medicos = User::where('rol_id', 2)->count();
            //Total de pacientes
            $total_pacientes = User::where('rol_id', 3)->count();

            //Total activos
            $total_activos = User::where('estado', 1)->count();
            //Total inactivos
            $total_inactivos = User::where('estado', 0)->count();
            //Total de usuarios
            $total_usuarios = User::count();
            
            //Total procedimientos
            $total_procedimientos = Procedimiento::count();

            //Total agendas
            $total_agendas = Agenda::count();
            //Total agendas fecha actual
            $total_agendas_fecha_actual = Agenda::whereDate('fecha', date('Y-m-d'))->count();

            $dashboard_admin = [
                'total_administradores' => $total_administradores,
                'total_pacientes' => $total_pacientes,
                'total_medicos' => $total_medicos,
                'total_activos' => $total_activos,
                'total_inactivos' => $total_inactivos,
                'total_usuarios' => $total_usuarios,
                'total_procedimientos' => $total_procedimientos,
                'total_agendas' => $total_agendas,
                'total_agendas_fecha_actual' => $total_agendas_fecha_actual
            ];

            return view('dashboard', compact('dashboard_admin'));
        }
    
        //***Consultas si el usuario es paciente**/
        if(auth()->user()->rol_id == 3) {
            //consultar el total de citas agendadas de un paciente
            $total_citas_pacientes = Cita::where('paciente_id', auth()->user()->id)->where('estado', 1)->count();
            //consultar el total de citas canceladas de un paciente
            $total_canceladas_pacientes = Cita::where('paciente_id', auth()->user()->id)->where('estado', 3)->count();
            //consultar el total de citas atendidas de un paciente con receta
            $total_recetas_pacientes = Cita::where('paciente_id', auth()->user()->id)->where('estado', 2)->count();

            $dashboard_paciente = [
                'total_citas_pacientes' => $total_citas_pacientes,
                'total_canceladas_pacientes' => $total_canceladas_pacientes,
                'total_recetas_pacientes' => $total_recetas_pacientes
            ];

            return view('dashboard', compact('dashboard_paciente'));

        }
        //constulas si el usuario es médico
        if(auth()->user()->rol_id == 2) {
            //consultar el total de citas atendidas de un médico
            $total_atendidas_medico = Agenda::where('medico_id', auth()->user()->id)->whereHas('cita', function($query) {
                $query->where('estado', 2);
            })->count();
            //consultar el total de citas del día de un médico
            $total_dia_medico = Agenda::where('medico_id', auth()->user()->id)->whereDate('fecha', date('Y-m-d'))->count();
            
            //consultar el total de citas canceladas de un médico
            $total_canceladas_medico = Agenda::where('medico_id', auth()->user()->id)->whereHas('cita', function($query) {
                $query->where('estado', 3);
            })->count();

            $dashboard_medico = [
                'total_atendidas_medico' => $total_atendidas_medico,
                'total_dia_medico' => $total_dia_medico,
                'total_canceladas_medico' => $total_canceladas_medico
            ];

            return view('dashboard', compact('dashboard_medico'));
        }
    }
}
