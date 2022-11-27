<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
use App\Models\books;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BooksController::class,'view']);

// Route::get('/publisher', function () {
//     return view('publisher');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail/{id}', [BooksController::class, 'detail']);

Route::get('/publisher', [PublishersController::class, 'index']);

// Route::get('/categories',[CategoriesController::class, 'index']);

Route::get('/categories1', function () {
    return view('categories1');
});

Route::get('/categories2', function () {
    return view('categories2');
});

Route::get('/categories/{id}', [CategoriesController::class,'index']);
