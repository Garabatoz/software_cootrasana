<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //!RELACION UNO A MUCHOS
    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
    use HasFactory;
}
