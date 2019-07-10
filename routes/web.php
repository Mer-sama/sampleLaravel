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

Route::get('/Form','form@Form');
Route::get('/display','form@displayrecord');
Route::post('/display','form@displayData');


Route::get('/insert','form@insertfruits');
Route::post('/insert','form@insfruit');
<<<<<<< HEAD
Route::delete('/fruits/{id}','form@deletefruits');
Route::get('/fruits/{id}','form@deletefruits');
Route::get('/fruits','form@displayfruits');
=======
>>>>>>> f8026dfc08e7857c456a4db3b756cd26167ef9e8


