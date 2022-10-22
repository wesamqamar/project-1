<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

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

/** Routes for category */
Route::get('/package', [PackageController::class, 'index']);
//Route::get('/category/create', [CategoryController::class, 'create']);
//Route::get('/category/{id}', [CategoryController::class, 'find']);
//Route::post('/category', [CategoryController::class, 'store']);
