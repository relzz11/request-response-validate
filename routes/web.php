<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;


Route::get('/user/create', [UserController::class, 'create']) -> name ('user.create');
Route::post('/user/store', [UserController::class, 'store']) -> name ('user.store');

Route::get('/contact/create', [ContactController::class, 'create']) -> name ('contact.create');
Route::post('/contact/store', [ContactController::class, 'store']) -> name ('contact.store');

route::get('/admin', [AdminController::class, 'index']) -> name ('admin.create');
route::post('/admin/store', [AdminController::class, 'store']) -> name ('admin.store');