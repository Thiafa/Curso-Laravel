<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    echo "Rotas em Laravel";
    echo "</br><a href='contato'>Contato</a>";
    echo "<br><a href='sobre'>Sobre</a>";
});
Route::get('/contato', function () {
    echo "Contato";
});
Route::get('/contato/{telefone}', function (int $telefone) {
    echo "Seu telefone é: $telefone";
});
Route::get('/sobre', function () {
    echo "Sobre";
});
Route::get('/perfil/{usuario}/{id}', function ($usuario, int $id) {
    echo "Seja bem vindo $usuario. Seu id do usuário é $id";
})->where('id',"[0-9]+")->where('usuario','[A-Za-z]+');

