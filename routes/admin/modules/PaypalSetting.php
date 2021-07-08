<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PaypalSettingController;

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
		Route::get('/paypal_settings', [PaypalSettingController::class, 'show'])->name('paypal_settings.show');
		Route::post('/paypal_settings', [PaypalSettingController::class, 'update'])->name('paypal_settings.update');
		// your routes here
	});
});