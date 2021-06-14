<?php

use Illuminate\Support\Facades\Route;

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



    Route::get('/', function () {
        return view('welcome');
    });

Route::prefix('dashboard')->group(static function() {

    Route::middleware('auth')->group(static function () {
        Route::get('/',[\App\Http\Controllers\AdminBuildingController::class,'index'])->name('dashboard');
        Route::resource('building', \App\Http\Controllers\AdminBuildingController::class);
        Route::resource('contact', \App\Http\Controllers\AdminContactController::class);
        Route::resource('member', \App\Http\Controllers\AdminMembersController::class);
        Route::post('upload-media',[\App\Http\Controllers\MediaController::class,'addMedia'])->name('upload-media');
        Route::post('replace-media',[\App\Http\Controllers\MediaController::class,'replaceMedia'])->name('replace-media');
        Route::post('update-media',[\App\Http\Controllers\MediaController::class,'updateMedia'])->name('update-media');
        Route::post('delete-media',[\App\Http\Controllers\MediaController::class,'deleteMedia'])->name('delete-media');
    });
});

Route::any('listings',  [\App\Http\Controllers\FrontBuildingController::class,'index']);
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth'])->name('dashboard');
//





require __DIR__.'/auth.php';


Route::get('/setlocale/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ru', 'cn'])) {
        abort(400);
    }

    \Illuminate\Support\Facades\Session::put('locale', $locale);
    \Illuminate\Support\Facades\Session::save();

    return redirect()->back()->send();
})->name('setlocale');
