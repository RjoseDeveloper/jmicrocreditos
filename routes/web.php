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

use App\Models\Tipocredito;
use App\User;
use Spatie\Permission\Contracts\Role;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/juros', 'HomeController@simular');

Route::resource('users', 'UserController');

Route::resource('creditos', 'CreditoController');

Route::resource('creditos', 'CreditoController');

Route::resource('creditopenhors', 'CreditopenhorController');

Route::resource('creditonegocios', 'CreditonegocioController');

Route::resource('tipocreditos', 'TipocreditoController');

View::composer(['*'], function ($view){

    $utilizadores = User::all();
    $tipocredito = Tipocredito::all();

    $view->with('utilizadores',$utilizadores)
        ->with('tipocredito',$tipocredito);
});




Route::resource('tipocreditos', 'TipocreditoController');


Route::resource('historicocreditos', 'HistoricocreditoController');
