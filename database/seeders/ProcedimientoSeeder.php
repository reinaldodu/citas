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
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'
            ],
            [
                'nombre' => 'Blefaroplastia',
                'descripcion' => 'Descripción de la Blefaroplastia',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Cancer de piel',
                'descripcion' => 'Descripción cancer de piel',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Gluteoplastia',
                'descripcion' => 'Descripción gluteoplastia',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Liposucción',
                'descripcion' => 'Descripción liposucción',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Mamografía de aumento',
                'descripcion' => 'Descripción mamografía de aumento',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Mamografia de reducción',
                'descripcion' => 'Descripción mastopexia',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Mastopexia',
                'descripcion' => 'Descripción mastopexia',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Otoplastia',
                'descripcion' => 'Descripción otoplastia',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Rinoplastia',
                'descripcion' => 'Descripción rinoplastia',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Reconstrucción mamaria',
                'descripcion' => 'Descripción reconstrucción mamaria',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Quemaduras',
                'descripcion' => 'Descripción quemaduras',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
            [
                'nombre' => 'Relleno facial',
                'descripcion' => 'Descripción relleno facial',
                'preguntas' => 'Pregunta 1: ¿En qué consiste el procedimiento?'

            ],
        ];
        //crear los procedimientos
        foreach ($procedimientos as $procedimiento) {
            \App\Models\Procedimiento::create($procedimiento);
        }
    }
}
