<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\SocialController;
use App\Http\Controllers\Api\v1\SettingController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Route::resource('comments', CommentController::class)->only([
//     'index', 'show'
//   ]);
  
//   Route::resource('comments', CommentController::class)->only([
//     'store', 'update', 'destroy'
//   ])->middleware('jwt');


Route::prefix('v1')->group(function() {

    Route::post('/register', [AuthController::class, 'createUser']);
    Route::post('/login', [AuthController::class, 'loginUser']);


    // Route::apiResource('socials', SocialController::class)
    //     ->only(['show','index']);


    // Route::apiResource('posts', PostController::class)
    //     ->middleware('auth:sanctum');

    Route::middleware(['auth:sanctum','is_admin'])->group(function () {
        Route::apiResource('socials', SocialController::class)
            ->only(['show','index','update']);

        Route::apiResource('settings', SettingController::class)
        ->only(['show','update']);

        // Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        //     ->name('logout');
    });





});

