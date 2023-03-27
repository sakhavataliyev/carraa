<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\StaticPageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', '/frontend/index');



Route::middleware('auth','is_admin')
        ->group(function () {
        
    Route::view('/home', 'backend.layouts.index')
        ->name('home');

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile', 'edit')
                ->name('profile.edit');
        Route::patch('/profile', 'update')
                ->name('profile.update');
        Route::delete('/profile', 'destroy')
                ->name('profile.destroy');
    });

    Route::resource('settings', SettingController::class);
    Route::resource('socials', SocialController::class);
    Route::resource('staticpages', StaticPageController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('solutions', SolutionController::class);

});

require __DIR__.'/auth.php';
