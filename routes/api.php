<?php

use App\Http\Controllers\Api\MovementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('movement', MovementController::class)->except(([
    'create', 'show', 'edit'
]));