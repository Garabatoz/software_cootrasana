<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    const ACTIVO = 1;
    const INACTIVO =0;

    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'fijo',
        'celular',
        'direccion',
        'municipio',
        'barrio',
        'email',
        'fechanac',
        'status',
    ];

    //!RELACION UNO A UNO
    public function conductor()
    {
        return $this->hasOne(Conductor::class);
    }
    //!RELACION UNO A UNO
    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apellido}";
    }
    use HasFactory;
}
