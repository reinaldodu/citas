<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Ejecutamos los seeders de los modelos
        $this->call(RolSeeder::class);
        $this->call(ProcedimientoSeeder::class);

        // Creamos un usuario administrador
        \App\Models\User::factory()->create([
            'name' => 'SuperAdministrador',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678'),
            'rol_id' => 1,
        ]);

        //Creamos 400 usuarios pacientes
        \App\Models\User::factory(200)->create([
            'rol_id' => 2,
        ]);

        //Creamos 20 usuarios médicos
        \App\Models\User::factory(20)->create([
            'rol_id' => 3,
        ]);

        //Creamos 3 usuarios secretarias
        \App\Models\User::factory(3)->create([
            'rol_id' => 4,
        ]);

        
    }
}
