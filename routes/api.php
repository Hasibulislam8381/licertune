<?php

use App\Http\Controllers\Api\BrandCampApiController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\Pages\PagesController;
use App\Http\Controllers\Api\SoftwareFeeApiController;
use App\Http\Controllers\Api\TeamApiController;
use App\Http\Controllers\Web\Backend\OurTeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('pages')->group(function () {
    Route::get('/all', [PagesController::class, 'allCms']);
    Route::get('/{slug}', [PagesController::class, 'getByPageName']);
});
Route::prefix('our-team')->group(function () {
    Route::get('/', [TeamApiController::class, 'index']);
});
Route::prefix('bradcamp')->group(function () {
    Route::get('/', [BrandCampApiController::class, 'index']);
});
Route::prefix('software-fees')->group(function () {
    Route::get('/', [SoftwareFeeApiController::class, 'index']);
});

Route::post('/submit-form', [HomeController::class, 'submitForm']);
