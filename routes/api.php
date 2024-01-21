<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\API\CategoryController;
use \App\Http\Controllers\API\AuthController;
use \App\Http\Controllers\API\ProductController;

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

Route::get("categories",[CategoryController::class,'getAll']);
Route::post("categories/create",[CategoryController::class,'create']);//
Route::get('/categories/{id}', [CategoryController::class, 'getById']);
Route::delete("/categories/{id}", [CategoryController::class, "delete"]);
Route::post("/categories/edit/{id}", [CategoryController::class, "edit"]);
Route::post("register", [AuthController::class, 'register']);
Route::post("product", [ProductController::class, 'create']);
Route::get("products", [ProductController::class, 'getList']);
