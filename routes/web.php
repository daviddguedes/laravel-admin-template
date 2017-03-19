<?php

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('admin.index');
    });
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
