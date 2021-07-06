<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RssSettingController;

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
		Route::get('/rss_settings', [RssSettingController::class, 'show'])->name('rss_settings.show');
		Route::post('/rss_settings', [RssSettingController::class, 'update'])->name('rss_settings.update');
		// your routes here
	});
});