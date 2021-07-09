<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CharacterresetSettingController;

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
		Route::get('/charactereset_settings', [CharacterresetSettingController::class, 'show'])->name('charactereset_settings.show');
		Route::post('/charactereset_settings', [CharacterresetSettingController::class, 'update'])->name('charactereset_settings.update');
		// your routes here
	});
});