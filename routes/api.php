<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogPostController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('blog')->group(function () {
    Route::get('list', [BlogPostController::class, 'index']);
    Route::post('create', [BlogPostController::class, 'store']);
    Route::post('update/{id}', [BlogPostController::class, 'update']);
    Route::delete('delete/{id}', [BlogPostController::class, 'destroy']);
});
