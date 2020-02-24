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
    return view('welcome');
});
Route::get('/home', function () {
    $alldata=App\Chanel::all();
    return view('chanel')->with('chanel',$alldata);
});

Route::post('/saveChanel', 'ChanelController@save');
Route::get('/updateChanel/{id}', 'ChanelController@update');
Route::get('/deleteChanel/{id}', 'ChanelController@delete');
Route::post('/editChanel', 'ChanelController@edit');