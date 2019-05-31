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

//View
Route::get('/', function () {
    return view('apply');
});

// EP to retrieve
Route::get('/records', 'RecordsController@index');
// EP to enable or disable the system
Route::get('/auto-generate/{flag}', 'RecordsController@autoGenerate');
