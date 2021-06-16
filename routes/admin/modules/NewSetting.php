<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\NewSettingController;

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
		Route::get('/new_settings', [NewSettingController::class, 'show'])->name('new_settings.show');
		Route::post('/new_settings', [NewSettingController::class, 'update'])->name('new_settings.update');
		// your routes here
	});
});