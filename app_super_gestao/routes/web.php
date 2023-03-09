<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class, 'mostrarPrincipal'])->name('site.index');

Route::get('/sobre', [SobreController::class, 'mostrarSobre'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class,'mostrarContato'])->name('site.contato');

Route::get('/login', function(){
    return 'teste';
})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){
        return 'teste';
    })->name('app.clientes');
    
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function(){
        return 'teste';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.rota1'); 

Route::fallback(function(){
   echo 'A rota acessada não existe. <a href="'.route('site.index').'">home</a>';
});

// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (string $nome, int $categoria_id){
//         echo "Olá $nome $categoria_id";
//     }
// )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');


// Route::get('/rota1', function(){
// echo 'Rota 1';
// })->name('site.rota1'); 

// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2'); 

// Route::redirect('/rota2', 'rota1');

