<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuec extends Model
{
    //!RELACION DE UNO A MUCHOS INVERSA
    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }
    use HasFactory;
}
