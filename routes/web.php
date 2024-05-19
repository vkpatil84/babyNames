<?php

use App\Http\Controllers\NamesController;
use App\Http\Controllers\TestController;
use App\Models\IndianNames;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indian_names', [NamesController::class, 'indian_names']);
Route::get('/male_names', [NamesController::class,'test']);
Route::get('/female_names', [NamesController::class,'test']);
