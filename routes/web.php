<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BiografiController;
use App\destroy;
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

Route::get('/logout', function () {
    return view('/admin/index');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);




Route::get('/add', [BiografiController::class, 'index']);
Route::post('/add', [BiografiController::class, 'create']);
Route::get('/table', [BiografiController::class, 'show']);
Route::get('/anggota', [BiografiController::class, 'anggota']);
Route::get('/mitra', [BiografiController::class, 'mitra']);
// Route::get('/delete/{id}', [BiografiController::class, 'delete'])->name('delete');
Route::get('/delete/{No}', [BiografiController::class, 'destroy']);
Route::get('/edit/{No}', [BiografiController::class, 'edit']);
Route::post('/update/{No}', [BiografiController::class, 'update']);
// Route::post('santri/update', [SantriController::class, 'updatesantri'])->name('updatesantri')->middleware('auth');
// Route::get('santri/ubah/{id_santri}', [SantriController::class, 'ubahsantri'])->name('ubahsantri')->middleware('auth');

Route::get('/tambah', [BiografiController::class, 'in']);
Route::post('/tambah', [BiografiController::class, 'add_anggota']);
Route::get('/edit-anggota/{No}', [BiografiController::class, 'edit_anggota']);
Route::post('/update-anggota/{No}', [BiografiController::class, 'update_anggota']);
Route::get('/delete-anggota/{No}', [BiografiController::class, 'hapus']);
Route::get('/add-mitra', [BiografiController::class, 'index_mitra']);
Route::post('/add-mitra', [BiografiController::class, 'create_mitra']);
Route::get('/edit-mitra/{No}', [BiografiController::class, 'edit_mitra']);
Route::post('/update-mitra/{No}', [BiografiController::class, 'update_mitra']);
Route::get('/delete-mitra/{No}', [BiografiController::class, 'delete']);





