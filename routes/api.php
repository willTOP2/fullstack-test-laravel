<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;
use App\Http\Controllers\InputController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', function (Request $request) {
    return response()->json([
        'mensagem' => 'Olá mundo, servidor api funcionando!'
    ]);
});

//Route::get('/input/{text}', function($text) {
  //  return "Texo do botao: {$text}";
//} );

Route::get('/input/{text}', [InputController::class, 'Text']);

Route::get('/hello', [ HelloController::class, 'hello' ]);


Route::get('/hora', function(){
    
   setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
  date_default_timezone_set( 'America/Sao_Paulo' );
    
    echo json_encode(strftime( '%e/%m/%Y %T', strtotime('now'))); 
    



});
// TODO: criar uma rota que retorne a data-hora atual (sugestão: use a função `now()`)
// TODO: criar uma rota POST que chame uma função em um controller e retorne o texto recebido na requisição
