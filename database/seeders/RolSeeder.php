<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        $roles = [
            [
                'nombre' => 'Administrador',
                'descripcion' => 'Administrador del sistema',
            ],
            [
                'nombre' => 'Paciente',
                'descripcion' => 'Paciente del sistema',
            ],
            [
                'nombre' => 'Médico',
                'descripcion' => 'Médico del sistema',
            ],
            [
                'nombre' => 'Secretaria',
                'descripcion' => 'Secretaria del sistema',
            ],
        ];
        //Crear los roles
        foreach ($roles as $rol) {
            \App\Models\Rol::create($rol);
        }

    }
}
