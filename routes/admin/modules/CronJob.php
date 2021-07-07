<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CronJobController;

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
		Route::get('/cron_jobs', [CronJobController::class, 'index'])->name('cron_jobs.index');
		Route::get('/cron_jobs/create', [CronJobController::class, 'create'])->name('cron_jobs.create');
		Route::post('/cron_jobs', [CronJobController::class, 'store'])->name('cron_jobs.store');
		Route::get('/cron_jobs/{id}', [CronJobController::class, 'show'])->name('cron_jobs.show');
		Route::post('/cron_jobs/{id}', [CronJobController::class, 'update'])->name('cron_jobs.update');
		Route::delete('/cron_jobs/delete/{id}', [CronJobController::class, 'destroy'])->name('cron_jobs.destroy');
		// your routes here
	});
});