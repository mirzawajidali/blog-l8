<?php

use App\Http\Controllers\Admin\Appearance;
use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Blog\Contact;
use App\Http\Controllers\Blog\Home;
use App\Http\Controllers\Top_Header;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/',[Auth::class, 'login'])->name('login')->middleware('alreadylogged');
    Route::post('/',[Auth::class, 'logged_in'])->name('logged_in');
    Route::get('/logout',[Auth::class, 'logout'])->name('logout')->middleware('authcheck');
    Route::get('/dashboard',[Dashboard::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
    Route::get('/main-slider',[Appearance::class, 'main_slider'])->name('main_slider')->middleware('authcheck');
    Route::post('/main-slider',[Appearance::class, 'main_slider_upload'])->name('main_slider_upload')->middleware('authcheck');
    Route::get('/main-slider/delete/{id}',[Appearance::class, 'main_slider_delete'])->name('main_slider_delete')->middleware('authcheck');
    Route::get('/appearance/header',[Top_Header::class,'ap_header'])->name('header')->middleware('authcheck');
});


Route::prefix('/')->group(function(){
    Route::get('/',[Home::class, 'home']);
    Route::get('contact',[Contact::class, 'contact']);
});
