<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tarefas', [TarefaController::class, 'index'])->name('index');


Route::get('tarefa/{id}', [TarefaController::class, 'show']);

 
Route::post('tarefa', [TarefaController::class, 'store']);

 
Route::put('tarefa/{id}', [TarefaController::class, 'update']);

 
Route::delete('tarefa/{id}', [TarefaController::class,'destroy']);