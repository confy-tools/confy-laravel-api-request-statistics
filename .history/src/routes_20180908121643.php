<?php


Route::get('dashboard', 'Confyans\RequestStatistics\RequestStatisticsController@dashboard');
Route::get('subtract/{a}/{b}', 'Confyans\RequestStatistics\RequestStatisticsController@subtract');