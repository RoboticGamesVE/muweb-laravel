<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\NewController;

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
		Route::get('/news', [NewController::class, 'index'])->name('news.index');
		Route::get('/news/create', [NewController::class, 'create'])->name('news.create');
		Route::post('/news', [NewController::class, 'store'])->name('news.store');
		Route::get('/news/{id}', [NewController::class, 'show'])->name('news.show');
		Route::post('/news/{id}', [NewController::class, 'update'])->name('news.update');
		Route::delete('/news/delete/{id}', [NewController::class, 'destroy'])->name('news.destroy');
		// your routes here
	});
});