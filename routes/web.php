<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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

Route::view('/', 'welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// Route::get('/home', function () {
//     return view('backend.layouts.index');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth','is_admin')->group(function () {

    Route::view('/home', 'backend.layouts.index')->name('home');

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
    // Route::resource('staticpages/{slug}', 'StaticPageController')->only([
    //     'show',
    // ]);
    // Route::resource('staticpages/{slug}', 'StaticPageController')->except([
    //     'show',
    // ]);

    Route::resource('contacts', ContactController::class);

    
    // Route::controller(SettingController::class)->group(function () {
    //     Route::resource('setting', 'edit');
    //     // Route::post('setting/update', 'update')
    //     //         ->name('update');
    // });

    // Route::resource('setting', [UserController::class, 'setting']);

    // Route::controller(ContactController::class)->group(function () {
    //     Route::resource('contact', 'edit')
    //             ->name('edit');
    //     // Route::post('contact/update', 'update')
    //     //         ->name('update');
    // });

});
// Route::get('settings', function () {
//     return response('Hello World', 200)
//                   ->header('Content-Type', 'text/plain');
// });
// Route::middleware('auth','is_admin')->group(function () {
//     Route::resource('settings', SettingController::class);
//     Route::resource('contacts', ContactController::class);
// });

// Route::get('settings',[SettingController::class, 'index'])->name('settings.index');

require __DIR__.'/auth.php';

// Route::get('/admin/edit/brand/{id}',[AdminsController::class, 'EditBrand'])
//     ->name('edit.brand');
// Route::post('/admin/update/brand/{id}',[AdminsController::class, 'UpdateBrand'])
//     ->name('update.brand');