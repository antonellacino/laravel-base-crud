<?php
//Cagnolini
Route::get('/','CagnoliniController@index');
Route::get('/show{id}','CagnoliniController@show')->name('show');

//Omini-------------------------------------------------
Route::get('omini','OminiController@index')->name('omini');
Route::get('showOmino/{id}','OminiController@showOmino')->name('showOmino');

Route::get('createOmino','OminiController@createOmino')->name('createOmino');
Route::get('storeOmino','OminiController@storeOmino')->name('storeOmino');

Route::get('editOmino/{id}','OminiController@editOmino')->name('editOmino');
Route::get('updateOmino/{id}','OminiController@updateOmino')->name('updateOmino');

Route::get('destroyOmino/{id}','OminiController@destroyOmino')->name('destroyOmino');
