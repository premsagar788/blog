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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/admin/profile', [App\Http\Controllers\DashboardController::class, 'profile']);

Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog']);

Route::get('/privacy-policy', [App\Http\Controllers\FrontendController::class, 'privacyPolicy']);