<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\homeMiddleware;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;

Route::get('/', function () {
    return view('welcome');
})->name('landing')->middleware('guest');

Route::middleware(homeMiddleware::class)->group(function(){
                                                                
    Route::get('/home',[homeController::class,'index'])->name('home');

                                                                    
    Route::middleware('auth','verified')->group(function(){
        Route::get('/createPost',[postController::class,'createView'])->name('createPostView');
        Route::post('/actionPost',[postController::class,'create'])->name('createPost');
    });
});