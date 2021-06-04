<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index.html', function () {
    return view('welcome');
});


Route::get('/about.html', function () {
    return view('about');
});

Route::get('/agent-single.html', function () {
    return view('agent-single');
});

Route::get('/blog-grid.html', function () {
    return view('blog-grid');
});

Route::get('/blog-single.html', function () {
    return view('blog-single');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/property-grid.html', function () {
    return view('property-grid');
});

Route::get('/property-single.html', function () {
    return view('property-single');
});

Route::get('/agents-grid.html', function () {
    return view('agents-grid');
});