<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\General\AuthController;
use App\Http\Controllers\General\HomeController;
use Illuminate\Support\Facades\Route;

//home routes
Route::name('general')->group(function() {
    //home index route
    Route::get('/', [HomeController::class,'index']);

    //route for login
    Route::get('/login', [AuthController::class,'login'])->name('.login.index');
    Route::post('/login/submit', [AuthController::class,'submit'])->name('.login.submit');

});

//dashboard routes
Route::prefix('dashboard')->name('admin')->middleware('auth')->group(function() {
    //home index route
    Route::get('/', [DashboardController::class,'index'])->name('.dashboard');

    Route::get('/register/servant', [UserController::class,'registerServant'])->name('.register.servant');
    Route::post('/register/servant/submit', [UserController::class,'registerServantSubmit'])->name('.register.servant.submit');
    Route::get('/register/servant/list', [UserController::class,'servantList'])->name('.servant.list');

    Route::get('/register/visitor', [UserController::class,'registerVisitor'])->name('.register.visitor');
    Route::post('/register/visitor/submit', [UserController::class,'registerVisitorSubmit'])->name('.register.visitor.submit');
    Route::get('/register/visitor/list', [UserController::class,'visitorList'])->name('.visitor.list');

});
