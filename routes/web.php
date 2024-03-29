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
    return view('blog.index');
});

Auth::routes();

Route::prefix('dashboard')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/pages', 'HomeController@pageview')->name('pages');
});

Route::get('/admin/home', 'HomeController@admin')->middleware('admin');

Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');
Route::get('/post', 'PostController@index')->name('post');