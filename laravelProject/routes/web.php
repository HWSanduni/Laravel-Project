<?php

// home page router
Route::get('/', function () {
    return view('home');
});

// main page routers
Route::get('/chanels', 'ChanelController@index');
Route::get('/episodes', 'EpisodeController@get');


// get and post routers in Chanel
Route::post('/saveChanel', 'ChanelController@save');
Route::get('/updateChanel/{id}', 'ChanelController@update');
Route::get('/deleteChanel/{id}', 'ChanelController@delete');
Route::get('/getChanel', 'ChanelController@getall');
Route::post('/editChanel', 'ChanelController@edit');

// get and post routers in Episode
Route::post('/saveEpisode', 'EpisodeController@save');
Route::get('/updateEpisode/{id}', 'EpisodeController@update');
Route::get('/deleteEpisode/{id}', 'EpisodeController@delete');
Route::get('/getEpisode', 'EpisodeController@getall');
Route::post('/editEpisode', 'EpisodeController@edit');
Route::get('/viewepisode', 'EpisodeController@index');