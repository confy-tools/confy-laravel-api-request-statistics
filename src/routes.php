<?php

Route::get('dashboard', 'Confyans\RequestStatistics\RequestStatisticsController@apiTrackAction')->name('confyans-api');
Route::get('subtract/{a}/{b}', 'Confyans\RequestStatistics\RequestStatisticsController@subtract');
