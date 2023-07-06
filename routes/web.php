<?php

Route::get('/', 'HomeController@index')->name('index.home');
Route::post('/store', 'HomeController@store')->name('store.home');