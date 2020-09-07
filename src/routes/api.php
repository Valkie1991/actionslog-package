<?php 

use Illuminate\Http\Request;

Route::group(['namespace' => 'Henri\Actionslog\Http\Controllers'], function () {
    Route::get('/test', 'ActivityController@index');
});