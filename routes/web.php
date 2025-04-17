<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JasaPriceController;
use App\Http\Controllers\Admin\JasaController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Public\ForumDiskusiController;

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
Route::get('/detail-service/{id}', [PublicController::class, 'detailService'])->name('detail-service');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware(['auth', 'auth.user'])->group(function () {
    Route::get('/profil/{user}', [ProfileController::class, 'show'])->name('profil.show');
    Route::post('/produk/{jasa_id}/komentar', [ForumDiskusiController::class, 'store'])->name('forum.store');
    Route::post('/forum/store/{jasa_id?}', [ForumDiskusiController::class, 'store'])->name('forum.store');

});

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('jasa', JasaController::class);
    Route::get('/admin/jasa/detail/{nama}', function ($nama) {
        return view('admin.pages.jasa.detail', compact('nama'));
    })->name('jasa.detail');
    Route::post('/jasa-prices', [JasaPriceController::class, 'store'])->name('jasa-prices.store');
    Route::put('/jasa-price/{id}', [JasaPriceController::class, 'update'])->name('jasa-price.update');
Route::delete('/jasa-price/{id}', [JasaPriceController::class, 'destroy'])->name('jasa-price.destroy');

});

Auth::routes();
Route::get('logout', function () {
    Auth::logout();
});
