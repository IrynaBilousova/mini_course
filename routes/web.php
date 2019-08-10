<?php

Route::post('/next',  'TestingController@saveAnswer')->name('next');
Route::get('/', 'TestingController@index')->name('start');
Route::post('/', 'TestingController@startTest');
Route::get('/finish', 'TestingController@finish')->name('finish');
