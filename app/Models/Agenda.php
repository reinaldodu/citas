<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'hora',
        'medico_id',
        'procedimiento_id',
        'tipo',
        'estado',
    ];

    public function medico()
    {
        return $this->belongsTo(User::class);
    }
    public function procedimiento()
    {
        return $this->belongsTo(Procedimiento::class);
    }
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    //getter estado
    public function getEstadoAttribute($estado)
    {
        if ($estado == 1) {
            return 'Disponible';
        } elseif ($estado == 2) {
            return 'Ocupada';
        } else {
            return 'Cancelada';
        }
    }

    //getter tipo
    public function getTipoAttribute($tipo)
    {
        if ($tipo == 1) {
            return 'Consulta';
        } else {
            return 'Procemiento';
        }
    }
    
}
