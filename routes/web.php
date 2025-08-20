<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('users', UserController::class);
// Route::resource('users', UserController::class)->only([
//     'create', 'show', 'update'
// ]);
// Route::resource('users', UserController::class)->except([
//     'create', 'show', 'update'
// ]);
// Route::resource('users', UserController::class);
// Route::resource('users', UserController::class)->names([

//     'create' => 'users.build',
//     'show' => 'users.view',
// ]);


// Route::resource('users.comments', CommentController::class);
Route::resource('users.comments', CommentController::class)->shallow();
