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


Route::get('/', function () {
    return view('auth.login');
});


//rutes de autentificacio d'usuaris
Auth::routes();


Route::group(['middleware' => ['auth']],function(){
    
        
    Route::get('/main', [
        'as' => 'mainMenu',
        'uses' => 'TaskController@index'
    ]);
    
    Route::post('/buscarAnimal', [
        'as' => 'buscarAnimal',
        'uses' => 'AnimalController@searchAnimal'
    ]);

    //rutes CRUD de Granja
    Route::resource('Granja', 'GranjaController');

    //rutes CRUD Animal
    Route::resource('Animal', 'AnimalController');

    //rutes CRUD Llet
    Route::resource('Llet', 'LletController');

    //rutes CRUD Pinso
    Route::resource('Pinso', 'PinsoController');  
    
    //rutes CRUD Vacuna
    Route::resource('Vacuna', 'VacunaController');
    
    //rutes CRUD Task
    Route::resource('Task', 'TaskController');
});




