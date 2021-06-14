<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\WebsiteSettingController;

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
		Route::get('/website_settings', [WebsiteSettingController::class, 'show'])->name('website_settings.show');
		Route::post('/website_settings', [WebsiteSettingController::class, 'update'])->name('website_settings.update');
		// your routes here
	});
});