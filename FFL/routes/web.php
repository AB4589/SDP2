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
    return view('Land');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('land', function(){
        return view('land');
});
Route::get('donate', function(){
        return view('donate');
});

Route::get('organisation', function(){
        return view('organisation');
});
Route::get('donor', function(){
        return view('donor');
});
Route::get('volunteer', function(){
        return view('volunteer');
});
Route::get('blog', function(){
        return view('blog');
});
Route::get('about', function(){
        return view('about');
});
Route::get('contact', function(){
        return view('contact');
});


Route::post('logout', 'Auth\LoginController@logout')->name('logout'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
