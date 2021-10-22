<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function create() {
        return view('cadastroproduto');
    }
    
    public function store(Request $request) {
       
        Produtos::create([
        'nome' => $request->nomeproduto,
        'preco' => $request->preco,
        'custo' => $request->custoproduto,
       ]);
        
        //return "Produto criado com sucesso";
         return redirect('/');
    }
    
    public function index()
{
     return view('index');
}
    
}
