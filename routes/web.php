<?php

use Illuminate\Support\Facades\Route;

// url defines the path
// page defines which page is going to be trigger by the URL

// Route::get("url path", "controller file @ page file");
Route::get('blog', 'PagesController@blog');
Route::get('contact', 'PagesController@contact');
Route::get('gallery', 'PagesController@gallery');
Route::get('', 'PagesController@index'); // empty url means that my landing page will be the determined page will be returned by controller
Route::get('welcome', 'WelcomeController@hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
