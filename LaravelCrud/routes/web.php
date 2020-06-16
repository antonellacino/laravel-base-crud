<?php

Route::get('/','CagnoliniController@index');

Route::get('/show{id}','CagnoliniController@show')->name('show');
