<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    //!RELACION UNO A UNO
    public function persona()
    {
        return $this->hasOne(Persona::class);
    }
    //!RELACION MUCHOS A MUCHOS
    public function contratos()
    {
        return $this->belongsToMany(Contrato::class);
    }
    use HasFactory;
}
