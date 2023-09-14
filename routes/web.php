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
Route::get('/planejamentos/planejamento/{id}/avaliacao', 'PlanejamentoController@add')->name('planejamentos.add');
Route::post('/planejamentos/planejamento/{id}', 'PlanejamentoController@create')->name('planejamentos.create');