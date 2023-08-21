<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rafting', [App\Http\Controllers\DashboardController::class, 'rafting'])->name('pages.rafting');
Route::get('/curug', [App\Http\Controllers\DashboardController::class, 'curug'])->name('pages.curug');
Route::get('/taman', [App\Http\Controllers\DashboardController::class, 'taman'])->name('pages.taman');
Route::get('/harga', [App\Http\Controllers\DashboardController::class, 'harga'])->name('pages.harga');

Route::post('/pesan', [App\Http\Controllers\PesanController::class, 'store'])->name('pesan.store');
Route::get('/pesan', [App\Http\Controllers\PesanController::class, 'create'])->name('pages.pesan');
Route::get('/pesan/indexInvoice', [App\Http\Controllers\PesanController::class, 'index'])->name('pages.indexInvoice');
Route::get('/pesan/invoice/{pesan}', [App\Http\Controllers\PesanController::class, 'show'])->name('pages.invoice');

Route::get('/admin/index', [App\Http\Controllers\PesanController::class, 'adminHome'])->name('admin.indexAdmin')->middleware('is_admin');


