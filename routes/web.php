<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@home');

Route::get('/event', 'App\Http\Controllers\EventController@event');
Route::get('/event-detail', 'App\Http\Controllers\EventController@event_detail');

Route::get('/contact', 'App\Http\Controllers\ContactController@contact');