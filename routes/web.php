<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Public\PublicController;

/*
|--------------------------------------------------------------------------- 
| Web Routes
|--------------------------------------------------------------------------- 
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/service', [PublicController::class, 'service'])->name('service');
Route::get('/detail-service', [PublicController::class, 'detailService'])->name('detail-service');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware(['auth', 'auth.user'])->group(function () {
    //ini route khusus untuk user
});

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    //ini route khusus untuk admin
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('jasa', JasaController::class);

    // Route untuk detail jasa
Route::get('/admin/jasa/detail/{nama}', function ($nama) {
    return view('admin.pages.jasa.detail', compact('nama'));
})->name('jasa.detail');});  // <-- Perbaikan di sini, penutupan kurung setelah route admin

Auth::routes();
Route::get('logout', function () {
    Auth::logout();
});
