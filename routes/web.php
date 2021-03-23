<?php

use Illuminate\Support\Facades\Route;


/*

Route::get('/',function (){
	return view('pages/home');
})->name('home');


Route::get('/about-us',function (){
	return view('pages/about');
})->name('about');



Route::get('/help', function(){
	return view('pages/help');
});

*/



/*  oder for code function for php langage
*/

// Route::get('/', fn() => view('pages/home')) -> name('home');
// Route::get('/about-us', fn() => view('pages/about')) -> name('about');


/* oder for code Route with Laravel
*/

Route::view('/', 'pages/home') -> name('home');
Route::view('/about-us', 'pages.about') -> name('about');
Route::view('/help', 'pages/help');







// use Illuminate\Support\Facades\Route;

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

/*

Route::get('/', function () {
    return view('home');
});
*/