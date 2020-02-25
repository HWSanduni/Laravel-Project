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
Route::get('/home1', function () {
   
    return view('episode');
});
Route::post('/saveChanel', 'ChanelController@save');
Route::get('/updateChanel/{id}', 'ChanelController@update');
Route::get('/deleteChanel/{id}', 'ChanelController@delete');
Route::get('/getChanel', 'ChanelController@getall');
Route::post('/editChanel', 'ChanelController@edit');

Route::post('/saveEpisode', 'EpisodeController@save');
Route::get('/updateEpisode/{id}', 'EpisodeController@update');
Route::get('/deleteEpisode/{id}', 'EpisodeController@delete');
Route::get('/getEpisode', 'EpisodeController@getall');
Route::post('/editEpisode', 'EpisodeController@edit');