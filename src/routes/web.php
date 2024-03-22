<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Models\Contact;
use App\Models\Category;

Route::get('/', [ContactController::class, 'index']);
Route::post('/todos', [ContactController::class, 'store']);
Route::patch('/todos/update', [ContactController::class, 'update']);
Route::delete('/todos/delete', [ContactController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
