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
    
}
