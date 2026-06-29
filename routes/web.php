<?php

use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/posts", [PostController::class, "index"]);
Route::get("/posts/new", [PostController::class, "create"]);
Route::post("/posts", [PostController::class, "store"]);
Route::get("/posts/{post}", [PostController::class, "show"]);
Route::get("/posts/{post}/edit", [PostController::class, "edit"]);
Route::patch("/posts/{post}", [PostController::class, "update"]);
Route::delete("/posts/{post}", [PostController::class, "destroy"]);

// Routes for registering an account
Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);

// Routes for login
Route::get("/login", [SessionsController::class, "create"]);
Route::post("/login", [SessionsController::class, "store"]);

// Route for logout
Route::delete("/logout", [SessionsController::class, "destroy"]);