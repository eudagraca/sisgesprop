<?php

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
    return redirect('login');
});

Auth::routes();
Route::resource('cursos', 'CursosController');
Route::resource('estudante', 'EstudanteController');
Route::resource('cadeiras', 'CadeiraController');
Route::resource('preco', 'PrecoController');
Route::resource('matricula', 'MatriculaController');
Route::resource('inscricao', 'InscricaoController');
Route::resource('grau', 'GrauController')->middleware('can:admin_only,App\User');

Route::get('inscrever/{id}', 'InscricaoController@inscrever');
Route::get('matricular/{id}', 'MatriculaController@matricular');
Route::get('/naomatriculados', 'MatriculaController@naoMatriculados');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/live_search/action', 'LiveSearchController@action')->name('live_search.action');
Route::get('/cursospdf', 'ReportController@cursosPdf')->name('report.cursosPdf');

Route::post('/data', 'CadeiraController@fetch')->name('cadeiras.fetch');
Route::post('/graus', 'CursosController@cursoGrau')->name('graus.fetch');
Route::post('/atrasadas', 'CadeiraController@atrasadas')->name('cadeiras.atrasadas');
Route::post('/inscritos', 'InscricaoController@fetch')->name('inscritos.fetch');
