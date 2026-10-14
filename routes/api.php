<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('books',[BookController::class,'store']);




Route::prefix('books')->group(function (){
Route::post('/',[BookController::class,'store']);
Route::get('/', [BookController::class,'index']);
Route::put('/{id}', [BookController::class,'update']);
Route::get('/{id}', [BookController::class,'show']);
Route::delete('/{id}',[BookController::class,'destroy']);

});

Route::prefix('products')->group(function(){
Route::post('/',[ProductController::class,'store']);
Route::get('/', [ProductController::class,'index']);
Route::put('/{id}', [ProductController::class,'update']);
Route::get('/{id}', [ProductController::class,'show']);
Route::delete('/{id}',[ProductController::class,'destroy']);




});

Route::post('products/{id}/reduce-stock',[ProductController::class,'reduceStock']);
