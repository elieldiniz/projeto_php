<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PrincipalController@principal')->name('site.index');


Route::get('/sobre-nos','SobreNosController@sobre_nos')->name('site.sobre-nos');


Route::get('/contato','ContatoController@contato')->name('site.contato');


Route::get('/login',function(){return 'login';})->name('site.login');

//AGRUPANDO ROTAS
Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores',function(){return 'fornecedores';})->name('app.produtos');
    Route::get('/produtos',function(){return 'produtos';})->name('app.produtos');
});







//Rotas com parametros e validaçoes regex 
/*                                                             
Route::get(
    '/contato/{nome}/{categoria_id}', 
function(
    string $nome = 'Desconhecido',
    int $categoria_id = 1 // 1 - 'informação
    ){
    echo "Estamos aqui: $nome-$categoria_id";
    }
    //regex para validar
)->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');
*/