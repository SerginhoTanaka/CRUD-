<?php

use App\Http\Controllers\testecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('/', function () {
    return view('teste');
});
Route::get('/hello', [testecontroller::class,'buscar']);
Route::get('/produtos',[ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produtos/create',[ProdutoController::class, 'create'])->name('produtoCreate');
Route::post('/produtos/create',[ProdutoController::class, 'store']);
Route::get('/produtos/{id}',[ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produtos/{id}/edit',[ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produtos/{id}/edit',[ProdutoController::class, 'update'])->name('produto.update');
Route::delete('/produtos/{id}',[ProdutoController::class, 'delete'])->name('produto.delete');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
