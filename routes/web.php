<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BiografiController;

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

Route::get('/admin', function () {
    return view('/admin/index');
});


Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

// Route::get('/table', function () {
//     return view('/admin/table');
// });

// Route::get('/add', function () {
//     return view('/admin/add');
// });

Route::get('/edit', function () {
    return view('/admin/edit');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);




Route::get('/add', [BiografiController::class, 'index']);
Route::post('/add', [BiografiController::class, 'create']);

Route::get('/table', [BiografiController::class, 'show']);
// Route::get('/delete/{id}', [BiografiController::class, 'delete'])->name('delete');
Route::get('/delete/{id}', [BiografiController::class, 'delete']);


