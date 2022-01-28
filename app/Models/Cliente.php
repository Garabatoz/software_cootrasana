<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //!RELACION UNO A MUCHOS
    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
    //!RELACION UNO A UNO
    public function persona()
    {
        return $this->hasOne(Persona::class);
    }
    //!RELACION DE UNO A MUCHOS INVERSA
    public function tipoclientes()
    {
        return $this->belongsTo(TipoCliente::class);
    }
    use HasFactory;
}
