<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\SliderController;
use App\Http\Controllers\Api\v1\SocialController;
use App\Http\Controllers\Api\v1\SettingController;
use App\Http\Controllers\Api\v1\SolutionController;
use App\Http\Controllers\Api\v1\StaticPageController;

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

Route::prefix('v1')->group(function() {

    Route::post('/register', [AuthController::class, 'createUser']);
    Route::post('/login', [AuthController::class, 'loginUser']);

    Route::apiResource('staticpages', StaticPageController::class)
        ->only(['index','show']);
    Route::apiResource('sliders', SliderController::class)
        ->only(['index','show']);
    Route::apiResource('solutions', SolutionController::class)
        ->only(['index','show']);
    Route::apiResource('socials', SocialController::class)
        ->only(['show','index']);
    Route::apiResource('settings', SettingController::class)
        ->only(['show']);

    Route::middleware(['auth:sanctum','is_admin'])->group(function () {

        Route::apiResource('socials', SocialController::class)
            ->only(['update']);

        Route::apiResource('settings', SettingController::class)
            ->only(['update']);

        Route::apiResource('staticpages', StaticPageController::class)
            ->only(['create','store','update','destroy']);

        Route::apiResource('sliders', SliderController::class)
            ->only(['create','store','update','destroy']);

        Route::apiResource('solutions', SolutionController::class)
             ->only(['create','store','update','destroy']);

        Route::post('logout', [AuthController::class, 'logout'])
            ->name('logout');


            
    });


});

