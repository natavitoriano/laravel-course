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
Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/login', function() { return 'Login'; });

//App
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; });
    Route::get('/fornecedores', function() { return 'Fornecedores'; });
    Route::get('/produtos', function() { return 'Produtos'; });
});

/*
Route::get(
    '/contato/{nome}/{categoria_id}',
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');


Route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function(
        string $nome = 'Desconhecido', 
        string $categoria = 'Informação', 
        string $assunto = 'Contato',
        string $mensagem = 'mensagem não informada'
    ) {
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});*/

//Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});

Route::get('/sobre-nos', function () {
    return 'Sobre-nós';
});

Route::get('/contato', function () {
    return 'Contato';
});*/

/* verbo http
get
post
put
patch
delete
options
*/
