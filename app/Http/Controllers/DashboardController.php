<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Procedimiento;
use App\Models\Agenda;

class DashboardController extends Controller
{
    public function index()
    {
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


        return view('dashboard', compact(
            'total_administradores',
            'total_pacientes',
            'total_medicos',
            'total_activos',
            'total_inactivos',
            'total_usuarios',
            'total_procedimientos',
            'total_agendas',
            'total_agendas_fecha_actual'
        ));






        
    }
}
