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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/us', function () {
    return view('us');
});
Route::get('/line_1', function () {
    return view('line_1');
});
Route::get('/line_2', function () {
    return view('line_2');
});
Route::get('/line_3', function () {
    return view('line_3');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/contact', function () {
    return view('contact');
});




