<?php


Route::get('dashboard/{a}/{b}', 'Confyans\RequestStatistics\RequestStatisticsController@dashboard');
Route::get('subtract/{a}/{b}', 'Confyans\RequestStatistics\RequestStatisticsController@subtract');