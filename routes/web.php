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

    Route::get('/', 'TasksController@index')->name('profile');
/*Route::get('/', function () {
    $List = \App\Tasks::orderBy('created_at', 'asc')->get();

    return view('layouts.list', [
        'List' => $List
    ]);
});*/


    Route::post('/task', 'TasksController@store');
    Route::resource('task', 'TasksController');
