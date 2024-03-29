<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get todos list
Route::get('/todos', [TodoController::class, 'index']);
// retrieve a single todo
Route::get('/todos/{todo}', [TodoController::class, 'show']);
// create a todo
Route::post('/todos', [TodoController::class, 'store']);
// update a todo
Route::put('/todos/{todo}', [TodoController::class, 'update']);
// delete a todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy']);
// mark a todo as completed
Route::put('/todos/{todo}/complete', [TodoController::class, 'complete']);