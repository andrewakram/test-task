<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainAdmin\AuthController;
use App\Http\Controllers\MainAdmin\HomeController;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin'
], function () {
        Route::get('login', [AuthController::class,'login_view'])->name('.login-view');
        Route::post('login', [AuthController::class,'login'])->name('.login');
        Route::get('logout', [AuthController::class,'logout'])->name('.logout');

        Route::group([
            'middleware' => 'CheckAuth'
        ], function () {
            Route::get('home', [HomeController::class,'index'])->name('.home');
            Route::post('home', [HomeController::class,'index'])->name('.search.home');
        });
});
