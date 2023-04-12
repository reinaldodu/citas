<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'preguntas',
        'activo',
    ];

    // Un procedimiento tiene muchos pacientes
    public function pacientes()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
}
