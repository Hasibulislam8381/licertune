<?php

use App\Http\Controllers\Web\Backend\CmsController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\OurTeamController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('admin')->name('backend.')->middleware(['auth', 'verified'])->group(function () {

    // CMS Routes
    Route::controller(CmsController::class)->prefix('cms')->name('cms.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/status/{id}', 'status')->name('status');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });
    Route::controller(OurTeamController::class)->prefix('our_team')->name('our_team.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/status/{id}', 'status')->name('status');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });
});
