<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AddpointSettingController;

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
		Route::get('/addpoint_settings', [AddpointSettingController::class, 'show'])->name('addpoint_settings.show');
		Route::post('/addpoint_settings', [AddpointSettingController::class, 'update'])->name('addpoint_settings.update');
		// your routes here
	});
});