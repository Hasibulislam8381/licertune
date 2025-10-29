<?php

use App\Http\Controllers\Api\Pages\PagesController;
use App\Http\Controllers\API\TeamApiController;
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
