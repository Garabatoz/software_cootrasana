<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //!RELACION MUCHOS A MUCHOS
    public function contratos()
    {
        return $this->belongsToMany(Contrato::class);
    }
    use HasFactory;
}
