<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentoController;

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
    return view('welcome');
});

Route::get('/alimentos', 'AlimentoController@alimentos')->name('alimentos');
Route::get('/alimentos/add', 'AlimentoController@add')->name('alimentos.add');
Route::post('/alimentos/add', 'AlimentoController@create')->name('alimentos.create');
Route::get('/alimentos/edit/{id}', 'AlimentoController@edit')->name('alimentos.edit');
Route::put('/alimentos/{id}', 'AlimentoController@update')->name('alimentos.update');

Route::get('/alunos', 'AlunoController@alunos')->name('alunos');
Route::get('/alunos/add', 'AlunoController@add')->name('alunos.add');
Route::post('/alunos/add', 'AlunoController@create')->name('alunos.create');
Route::get('/alunos/edit/{id}', 'AlunoController@edit')->name('alunos.edit');
Route::put('/alunos/{id}', 'AlunoController@update')->name('alunos.update');

Route::get('/treinos', 'TreinoController@treinos')->name('treinos');

Route::get('/planejamentos', 'PlanejamentoController@planejamentos')->name('planejamentos');
Route::get('/planejamentos/planejamento/{id}', 'PlanejamentoController@planejamento')->name('planejamentos.planejamento');
Route::get('/planejamentos/planejamento/{id}/avaliacao', 'PlanejamentoController@avaliacao')->name('planejamentos.avaliacao');
Route::post('/planejamentos/planejamento/{id}', 'PlanejamentoController@create_avaliacao')->name('planejamentos.create_avaliacao');
Route::get('/planejamentos/planejamento/{id}/dieta', 'PlanejamentoController@dieta')->name('planejamentos.dieta');
Route::get('/getAlimentos', 'PlanejamentoController@getAlimentos');
// Route::post('/planejamentos/planejamento/{id}', 'PlanejamentoController@create_dieta')->name('planejamentos.create_dieta');