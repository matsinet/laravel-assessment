<?php

use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\V1\TodosController;
use App\Http\Controllers\Api\V1\UserTodosController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    # todos
    Route::apiResource('todos', TodosController::class);

    # users
    Route::apiResource('users', UsersController::class);

    Route::get('users/{user}/todos', [UserTodosController::class, 'index'] );
});
