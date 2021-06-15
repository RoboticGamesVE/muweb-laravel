<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HeadTagController;

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
		Route::get('/head_tag', [HeadTagController::class, 'show'])->name('head_tag.show');
		Route::post('/head_tag', [HeadTagController::class, 'update'])->name('head_tag.update');
		// your routes here
	});
});