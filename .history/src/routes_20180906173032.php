<?php


Route::get('add/{a}/{b}', 'Confyans\RequestStatistics\RequestStatisticsController@add');
Route::get('subtract/{a}/{b}', 'Confyans\RequestStatistics\RequestStatisticsController@subtract');