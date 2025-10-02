<?php

use Illuminate\Support\Facades\Route;



require base_path('routes/admin.php');





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

Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('admin_login');
Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('admin_register_user');
Route::post('/register/save', [App\Http\Controllers\UtilisateurController::class, 'store'])->name('admin_utilisateur_store');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('admin_logout');
Route::post('/login', [App\Http\Controllers\UtilisateurController::class, 'login'])->name('utilisateur_authenticate');




