<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/dashboard', [WebsiteController::class, 'dashboard'])->name('dashboard')
    ->middleware('auth');

Route::get('/login', [WebsiteController::class, 'login'])->name('login');
Route::post('/login-submit', [websiteController::class, 'login_submit'])->name('login_submit');

Route::get('/logout', [WebsiteController::class, 'logout'])->name('logout');


Route::get('/registration', [WebsiteController::class, 'registration'])->name('registration');
Route::post('/registration_submit', [WebsiteController::class, 'registration_submit'])
    ->name('registration_submit');

Route::get('/registration/verify/{token}/{email}', [WebsiteController::class, 'registration_verify']);

Route::get('/forgot-password', [WebsiteController::class, 'forgot_password'])->name('forgot_password');
Route::post('/forgot_password_submit', [WebsiteController::class, 'forgot_password_submit'])
    ->name('forgot_password_submit');

Route::get('/reset_password/{token}/{email}', [WebsiteController::class, 'reset_password'])->name('reset_password');
Route::post('/reset_password_submit', [WebsiteController::class, 'reset_password_submit'])
    ->name('reset_password_submit');

/*Admin */
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin_login');
Route::post('/admin/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard')
    ->middleware('admin:admin');
Route::get('admin/settings', [AdminController::class, 'settings'])->name('admin_settings')
    ->middleware('admin:admin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin_logout');
