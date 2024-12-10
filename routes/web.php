<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\homeMiddleware;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
})->name('landing')->middleware('guest');

Route::middleware(homeMiddleware::class)->group(function(){
                                                                
    Route::get('/home',[homeController::class,'index'])->name('home');

});