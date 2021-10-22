<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradasestoque extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'idprodutoentrada', 'idestoque', 'quantidadeentrada', 'custo', 'idusuario'
    ];
}
