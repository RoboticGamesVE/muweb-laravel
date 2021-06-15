<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LostpasswordSettingController;

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
		Route::get('/lostpassword_settings', [LostpasswordSettingController::class, 'show'])->name('lostpassword_settings.show');
		Route::post('/lostpassword_settings', [LostpasswordSettingController::class, 'update'])->name('lostpassword_settings.update');
		// your routes here
	});
});