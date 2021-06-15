<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RegisterSettingController;

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
		Route::get('/register_settings', [RegisterSettingController::class, 'show'])->name('register_settings.show');
		Route::post('/register_settings', [RegisterSettingController::class, 'update'])->name('register_settings.update');
		// your routes here
	});
});