<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class, 'index']);
Route::get('/delete/{id}', [UserController::class, 'delete'])->middleware('auth');

Route::get('/addProduct',[ProductController::class, 'addProduct'])->middleware('auth');
Route::post('/saveProduct', [ProductController::class, 'saveProduct']);

Route::get('/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::post('updateProduct', [ProductController::class, 'updateProduct'])->middleware('auth');

Route::get('/users',[UserController::class, 'index']);
Route::get( '/user/{id}',[UserController::class, 'show']);
//Route::get('/customers',[CustomerController::class, 'index']);


Route::get('/', [ProductController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/logout', [UserController::class, 'logout']);
