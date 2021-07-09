<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\GrandresetSettingController;

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
		Route::get('/grandreset_settings', [GrandresetSettingController::class, 'show'])->name('grandreset_settings.show');
		Route::post('/grandreset_settings', [GrandresetSettingController::class, 'update'])->name('grandreset_settings.update');
		// your routes here
	});
});