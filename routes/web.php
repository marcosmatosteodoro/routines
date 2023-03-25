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

Route::get('/', function () {return view('welcome');});

Route::resources(['categories' => 'App\Http\Controllers\CategoryController']);
Route::resources(['activity' => 'App\Http\Controllers\ActivityController']);
Route::resources(['rage' => 'App\Http\Controllers\RageController']);
Route::resources(['routines' => 'App\Http\Controllers\RoutinesController']);

