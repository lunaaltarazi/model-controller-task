<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('books',[BookController::class,'store']);




Route::prefix('books')->group(function (){

Route::get('/', [BookController::class,'index']);
Route::put('/{id}', [BookController::class,'update']);
Route::get('/{id}', [BookController::class,'show']);
Route::delete('/{id}',[BookController::class,'destroy']);

});
