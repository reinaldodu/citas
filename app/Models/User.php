<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nombres',
        'apellidos',
        'documento',
        'fecha_nacimiento',
        'telefono',
        'direccion',
        'email',
        'password',
        'rol_id',
        'estado'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Un usuario tiene un rol 1->Administrador, 2->Paciente, 3->Médico
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    // Un usuario tiene muchas citas
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    //getters activo
    public function getActivoAttribute()
    {
        return $this->estado == 1 ? 'Activo' : 'Inactivo';
    }


}
