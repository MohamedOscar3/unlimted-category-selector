<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("categories",[\App\Http\Controllers\CategoryController::class,"index"])->name("categories.index");
Route::redirect("/","/categories");

Route::get("categories/get-select-category-options",[\App\Http\Controllers\CategoryController::class,"getSelectCategoryOptions"])->name("categories.get-select-category-options");



