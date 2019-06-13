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
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/blog/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('/work', function () {
    return view('work');
});
Route::get('contact','ContactFormController@create');
Route::post('contact','ContactFormController@store');

//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
