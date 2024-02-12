<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\PlaceController;
use App\Http\Controllers\Api\SliderController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(SliderController::class)->group(function () {
    Route::get('sliders', 'index');
});

Route::controller(PlaceController::class)->prefix('places')->group(function () {
    Route::get('/', 'index');
    Route::get('/{slug}', 'show');
});

Route::controller(ArticleController::class)->prefix('articles')->group(function () {
    Route::get('/', 'index');
    Route::get('/{slug}', 'show');
});
