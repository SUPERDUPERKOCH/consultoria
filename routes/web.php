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
Route::get('/alimentos/add', 'AlimentoController@cadastrar')->name('alimentos.add');



Route::get('/alunos', 'AlunoController@alunos')->name('alunos');

Route::get('/treinos', 'TreinoController@treinos')->name('treinos');