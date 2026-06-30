<?php

use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function() {
    Route::resource("posts", PostController::class);
    Route::delete("/logout", [SessionsController::class, "destroy"]);
});

Route::middleware("guest")->group(function() {
    Route::get("/register", [RegisteredUserController::class, "create"]);
    Route::post("/register", [RegisteredUserController::class, "store"]);
    Route::get("/login", [SessionsController::class, "create"]);
    Route::post("/login", [SessionsController::class, "store"]);
});