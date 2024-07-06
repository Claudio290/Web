<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'rut', 'name', 'email', 'password', 'id_perfil',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function nombrePerfil(): ?string
    {
        return $this->perfil ? $this->perfil->nombre_perfil : 'N/A';
    }

    public function esAdministrador(): bool
    {
        return $this->perfil && $this->perfil->nombre_perfil === 'Administrador';
    }

    public function esEjecutivo(): bool
    {
        return $this->perfil && $this->perfil->nombre_perfil === 'Ejecutivo';
    }
}
