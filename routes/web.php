<?php

// use App\City;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // $allCities = DB::table('cities')->get();
    $allCities = City::get();
    // dump($allCities);
    return view('welcomenew', compact('allCities'));
});

Route::get('/city', 'CityController@index')->name('cities');

Route::get('/add-city', 'CityController@add')->name('add-city');

Route::post('/store-city', 'CityController@store')->name('store-city');

Route::get('/edit-city/{id}', 'CityController@edit')->name('edit-city');

Route::post('/updat-city/{id}', 'CityController@update')->name('update-city');
