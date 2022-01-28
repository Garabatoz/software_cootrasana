<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $guarded=[];

    //!RELACION MUCHOS A MUCHOS
    public function vehiculos()
    {
        return $this->belongsToMany(Vehiculo::class);
    }
    //!RELACION MUCHOS A MUCHOS
    public function conductors()
    {
        return $this->belongsToMany(Conductor::class);
    }
    //!RELACION DE UNO A MUCHOS INVERSA
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
    //!RELACION DE UNO A MUCHOS INVERSA
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    //!RELACION UNO A MUCHOS
    public function fuecs()
    {
        return $this->hasMany(Fuec::class);
    }
    use HasFactory;
}
