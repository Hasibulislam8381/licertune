<?php

use App\Http\Controllers\Web\Backend\BrandCampController;
use App\Http\Controllers\Web\Backend\CmsController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\FutureFeaturesController;
use App\Http\Controllers\Web\Backend\OurTeamController;
use App\Http\Controllers\Web\Backend\SoftwareFeeController;
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
    Route::controller(BrandCampController::class)->prefix('brand_camp')->name('brand_camp.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/status/{id}', 'status')->name('status');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });
    Route::controller(SoftwareFeeController::class)->prefix('software_fees')->name('software_fees.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/status/{id}', 'status')->name('status');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FutureFeaturesController::class)->prefix('future-features')->name('future_features.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update-all', 'updateAll')->name('update-all');
    });
});
