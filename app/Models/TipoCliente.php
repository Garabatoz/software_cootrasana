<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $guarded=[];
    //!RELACION UNO A MUCHOS
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
    use HasFactory;
}
