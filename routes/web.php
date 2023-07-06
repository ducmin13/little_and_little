<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@home');
Route::post('/order', 'App\Http\Controllers\HomeController@order');

Route::get('/event', 'App\Http\Controllers\EventController@event');
Route::get('/event-detail/{id}', 'App\Http\Controllers\EventController@event_detail');

Route::get('/contact', 'App\Http\Controllers\ContactController@contact');
Route::post('/contact', 'App\Http\Controllers\ContactController@send');

Route::post('/payment', 'App\Http\Controllers\OrderController@payment');
Route::get('/payment-success', 'App\Http\Controllers\OrderController@payment_success')->name('payment-success');
Route::get('/send-ticket', 'App\Http\Controllers\OrderController@sendticket');
