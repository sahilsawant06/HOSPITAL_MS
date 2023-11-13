<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/','showHome')->name('home');
// Route::get('/blog','showBlog')->name('blog');
// Route::get('/user/{id}','showUser')->name('users');

Route::controller(PageController::class)->group(function(){
    Route::get('/','showHome')->name('home');
Route::get('/blog','showBlog')->name('blog');
Route::get('/user/{id}','showUser')->name('users'); 

});

