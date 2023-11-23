<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\userlogindetail;
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
///Login Page for Hospital Management.
Route::get('/login',function(){
    return view('login');
});

Route::get('/getdata',[userlogindetail::class,'index']);

///Crud
Route::get('/showdata',[TodoController::class,'show']);
Route::get('todo_delete/{id}',[TodoController::class,'destroy']);
Route::get('/todo_add',[TodoController::class,'create']);
Route::post('/todo_submit',[TodoController::class,'store']);
Route::get('/todo_edit/{id}',[TodoController::class,'edit']);
Route::post('/todo_update/{id}',[TodoController::class,'update'])->name('todo.update');

