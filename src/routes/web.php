<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Ahatasham\ProfileEnhancer\app\Http\Controllers'], function (){
    Route::get('profile','ProfileController@index')->name('profile');
});

