<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'agenda_id',
        'estado',
        'observacion',
        'diagnostico',
        'medicamento',
    ];

    public function paciente()
    {
        return $this->belongsTo(User::class);
    }
    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
    public function procedimientos()
    {
        return $this->belongsToMany(Procedimiento::class);
    }

    //getter estado de la cita
    public function getEstadoAttribute($estado)
    {
        if($estado==1)
        {
            return 'Pendiente';
        }
        elseif($estado==2)
        {
            return 'Atendida';
        }
        else
        {
            return 'Cancelada';
        }
    }
}
