<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('/admin/index');
});

Route::get('/register', function () {
    return view('/admin/register');
});

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/portofolio', function () {
//     return view('portofolio');
// });

// Route::get('/team', function () {
//     return view('team');
// });

// Route::get('/pricing', function () {
//     return view('pricing');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });