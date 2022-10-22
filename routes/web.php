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

Route::get('/create',[PackageController::class,'createPackage']);
Route::post('/add', [PackageController::class,'addPackage']);

Route::get('/edit_package/{id}',[PackageController::class,'editPackage']);
Route::post('/update_package/{id}',[PackageController::class,'updatePackage']);

