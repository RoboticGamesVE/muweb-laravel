<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ContactSettingController;

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
		Route::get('/contact_settings', [ContactSettingController::class, 'show'])->name('contact_settings.show');
		Route::post('/contact_settings', [ContactSettingController::class, 'update'])->name('contact_settings.update');
		// your routes here
	});
});