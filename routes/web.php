<?php

use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Blog\Home;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/',[Auth::class, 'login'])->name('login')->middleware('alreadylogged');
    Route::post('/',[Auth::class, 'logged_in'])->name('logged_in');
    Route::get('/logout',[Auth::class, 'logout'])->name('logout')->middleware('authcheck');
    Route::get('/dashboard',[Dashboard::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
});


Route::prefix('/')->group(function(){
    Route::get('/',[Home::class, 'home']);
});
