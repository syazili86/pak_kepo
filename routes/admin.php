<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    //Route::get('post', [App\Http\Controllers\PostController::class,'index'])->name('post.index');
    Route::resource('post',App\Http\Controllers\PostController::class);
    Route::resource('category',App\Http\Controllers\PostCategoryController::class);
    Route::resource('produk_halal',App\Http\Controllers\ProdukHalalController::class);
    Route::resource('jenis_produk',App\Http\Controllers\JenisProdukController::class);
    Route::get('/tes',function(){
        Log::critical('hello');
    });
    Route::get('/browse/{categoryslug}/create',[App\Http\Controllers\PostController::class,'browseCreate'])->name('browse.create');
    Route::get('/browse/{categoryslug}',[App\Http\Controllers\PostController::class,'browse'])->name('browse.index');
    Route::get('/browse/{categoryslug}/{uid}/edit',[App\Http\Controllers\PostController::class,'browseEdit'])->name('browse.edit');
    Route::put('/browse/{categoryslug}/{uid}',[App\Http\Controllers\PostController::class,'browseUpdate'])->name('browse.update');
    Route::post('/browse/{categoryslug}/create',[App\Http\Controllers\PostController::class,'browseStore'])->name('browse.store');

    // Route::prefix('browse')->group(function(){
    //     Route::get('/{categoryslug}', [App\Http\Controllers\PostController::class,'browse'])->name('browse.index');
    // });
    Route::resource('user',App\Http\Controllers\UserController::class);

});
