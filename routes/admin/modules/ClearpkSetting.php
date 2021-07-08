<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ClearpkSettingController;

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
		Route::get('/clearpk_settings', [ClearpkSettingController::class, 'show'])->name('clearpk_settings.show');
		Route::post('/clearpk_settings', [ClearpkSettingController::class, 'update'])->name('clearpk_settings.update');
		// your routes here
	});
});