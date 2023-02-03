<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->foreignId('medico_id')->constrained('users');
            $table->string('estado'); // disponible, ocupado, cancelado
            $table->string('tipo'); // consulta, procedimiento, etc
            $table->foreignId('procedimiento_id')->constrained('procedimientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
};
