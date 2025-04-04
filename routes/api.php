<?php

use App\Http\Controllers\Api\MovementController;
use App\Http\Controllers\Api\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('movement', MovementController::class)->except(([
    'create', 'edit'
]));

Route::apiResource('users', UsersController::class)->except(([
    'show', 'edit', 'create'
]));