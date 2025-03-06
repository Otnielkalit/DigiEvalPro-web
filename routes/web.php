<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\JasaController;
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
    return view('public.pages.welcome',[
        'title' => 'Selamat Datang di DigiEval Pro'
    ]);
})->name('welcome');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::resource('jasa', JasaController::class);
