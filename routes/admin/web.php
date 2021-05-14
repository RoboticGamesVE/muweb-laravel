<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
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

// Login
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/processlogin', [LoginController::class, 'login'])->name('admin.processlogin');

//Route::group(['middleware' => ['auth','admin']], function() {
Route::group(['middleware' => 'auth'], function() {
	Route::prefix('admin')->group(function () {

		// Dashboard
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
	});
});
