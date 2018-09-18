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


Route::get('/halo', function () {
    //return view('Halo svijete!');
    return 'Halo svijete!';
});


Route::get('/users/{id}/{name}', function ($id,$name) {
    return "This is user $name with id $id";
});

Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PagesController');

Route::get('/about', function () {
    return view('pages.about');
});
