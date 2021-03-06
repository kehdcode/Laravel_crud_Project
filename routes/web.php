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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/create', function () {
    return view('create');
});

Route::get('/read', function () {
    return view('read');
});

//To Post Input into database
Route::post('create/submit', 'MessagesController@submit');

//To retrieve data
Route::get('/', 'MessagesController@getArticle');

//To Update data
Route::get('/update/{id}', 'MessagesController@update');

//To post the edited article
Route::post('/edit/{id}', 'MessagesController@edit');

//To read a single data
Route::get('/read/{id}', 'MessagesController@read');

//To read delete data
Route::get('/delete/{id}', 'MessagesController@delete');





