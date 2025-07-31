<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', 'PrincipalController@principal')
    ->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobre_nos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');


Route::middleware('autenticacao:ldap, visitante, p3,p4')->prefix('/app')->group(function() {
    
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});


Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
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