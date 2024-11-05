<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

# auth
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

# v1 routes
Route::prefix('v1')->group(function () {
    require_once __DIR__.'/api_v1.php';
});
