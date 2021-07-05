<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BannedIpController;

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
Route::group(['middleware' => 'auth'], function() {
	Route::prefix('admin/modules')->group(function () {
		// your routes here
		Route::get('/banned_ip', [BannedIpController::class, 'index'])->name('banned_ip.index');
		Route::get('/banned_ip/create', [BannedIpController::class, 'create'])->name('banned_ip.create');
		Route::post('/banned_ip/create', [BannedIpController::class, 'store'])->name('banned_ip.store');
		Route::delete('/banned_ip/delete/{id}', [BannedIpController::class, 'destroy'])->name('banned_ip.destroy');
		// your routes here
	});
});