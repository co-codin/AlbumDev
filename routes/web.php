<?php

/**
* Authentication
*/
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Album', 'prefix' => 'albums'], function () {
    Route::get('/', 'AlbumController@index');
});
Route::get('/', 'HomeController@index')->name('home');
