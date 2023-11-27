<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->group(function () {

  Route::get('/tasks', [TaskController::class, 'index']);

  Route::post('/tasks', [TaskController::class, 'store']);
  
  Route::get('/tasks/{task}', [TaskController::class, 'show']);

  Route::put('/tasks/{task}', [TaskController::class, 'update']);

  Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);

});