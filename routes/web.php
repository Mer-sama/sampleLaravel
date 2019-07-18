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

<<<<<<< HEAD
Route::get('/Activity2','Activity2@Activity2');
Route::post('/Activity2','Activity2@insertactivity');
Route::get('/displayActivity','Activity2@retireveactivity');
Route::get('/login','Activity2@login');
Route::get('/login','Activity2@login');
Route::post('/login','Activity2@loginss');



















=======

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Abouts', function () {
    return view('Abouts');
});

Route::get('/Contacts', function () {
    return view('Contacts');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/address', function () {
    return view('address');
});
>>>>>>> a0f9ee1869144da1c01a4b418190695b41fc2fed

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


