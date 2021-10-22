<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
 //   return Inertia::render('Dashboard');
 //   })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return Inertia::render('Dashboard');
    })->name('dashboard');

//Route::get('/novoproduto', 'App\Http\Controllers\ProdutosController@create')->name('novoproduto');

Route::get('/novoproduto',[ProdutosController::class, 'create'])->middleware('auth');;
Route::post('/produtoscontroller',[ProdutosController::class, 'store'])->middleware('auth');;
Route::get('/listaprodutos', [ProdutosController::class, 'index']);

Route::resource('products',ProductController::class);

