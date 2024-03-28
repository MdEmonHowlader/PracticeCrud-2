<?php

use App\Http\Controllers\CrudController;
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
Route::get('/', [CrudController::class, 'ShowData']);
Route::get('/add_data', [CrudController::class, 'AddData']);
Route::post('/store_data', [CrudController::class, 'StoreData']);
Route::get('/edit_data/{id}', [CrudController::class, 'EditData']);
Route::post('/update_data/{id}', [CrudController::class, 'updateData']);