<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcedimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Procedimientos
        $procedimientos = [
            [
                'nombre' => 'Abdominoplastia',
                'descripcion' => 'Descripción de la Abdominoplastia',
            ],
            [
                'nombre' => 'Blefaroplastia',
                'descripcion' => 'Descripción de la Blefaroplastia',
            ],
            [
                'nombre' => 'Cancer de piel',
                'descripcion' => 'Descripción cancer de piel',
            ],
            [
                'nombre' => 'Gluteoplastia',
                'descripcion' => 'Descripción gluteoplastia',
            ],
            [
                'nombre' => 'Liposucción',
                'descripcion' => 'Descripción liposucción',
            ],
            [
                'nombre' => 'Mamografía de aumento',
                'descripcion' => 'Descripción mamografía de aumento',
            ],
            [
                'nombre' => 'Mamografia de reducción',
                'descripcion' => 'Descripción mastopexia',
            ],
            [
                'nombre' => 'Mastopexia',
                'descripcion' => 'Descripción mastopexia',
            ],
            [
                'nombre' => 'Otoplastia',
                'descripcion' => 'Descripción otoplastia',
            ],
            [
                'nombre' => 'Rinoplastia',
                'descripcion' => 'Descripción rinoplastia',
            ],
            [
                'nombre' => 'Reconstrucción mamaria',
                'descripcion' => 'Descripción reconstrucción mamaria',
            ],
            [
                'nombre' => 'Quemaduras',
                'descripcion' => 'Descripción quemaduras',
            ],
            [
                'nombre' => 'Relleno facial',
                'descripcion' => 'Descripción relleno facial',
            ],
        ];
        //crear los procedimientos
        foreach ($procedimientos as $procedimiento) {
            \App\Models\Procedimiento::create($procedimiento);
        }
    }
}
