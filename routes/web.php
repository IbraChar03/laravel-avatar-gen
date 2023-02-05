<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "home"])->name("home");
Route::get('/create', [MainController::class, "form"])->name("avatar.create");
Route::post('/request', [MainController::class, "getRequest"])->name("avatar.request");
Route::get('/delete/{id}', [MainController::class, "deleteAvatar"])->name("avatar.delete");