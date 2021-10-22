<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saidassestoque extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'idprodutosaida', 'idestoque', 'quantidadesaida', 'valor', 'idusuario'
    ];
}

