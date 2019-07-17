<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Activity2','Activity2@Activity2');
Route::post('/Activity2','Activity2@insertactivity');
Route::get('/displayActivity','Activity2@retireveactivity');
Route::get('/login','Activity2@login');
Route::get('/login','Activity2@login');
Route::post('/login','Activity2@loginss');




















Route::get('/Form','form@Form');
Route::get('/display','form@displayrecord');
Route::post('/display','form@displayData');

Route::get('/insert','form@insertfruits');
Route::post('/fruits','form@insfruit');

Route::get('/edit/{id}','form@editfruits');
Route::post('/fruits/{id}','form@updatefruits');


Route::post('/fruits','form@insfruit');

Route::delete('/fruits/{id}','form@deletefruits');
Route::get('/fruits/{id}','form@deletefruits');

Route::get('/fruits','form@displayfruits');


