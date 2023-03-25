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

Route::get('/laravel', function () {return view('welcome');});
Route::get('/', function () {return 'home';});

Route::resources(['categories' => 'App\Http\Controllers\CategoryController'], ['names' => resourcesName('categories')]);
Route::resources(['activity' => 'App\Http\Controllers\ActivityController'], ['names' => resourcesName('activity')]);
Route::resources(['rage' => 'App\Http\Controllers\RageController'], ['names' => resourcesName('rage')]);
Route::resources(['routines' => 'App\Http\Controllers\RoutinesController'], ['names' => resourcesName('routines')]);


function resourcesName(string $name): array
{
    return [
        "index"   => "$name.index",
        "create"  => "$name.create",
        "show"    => "$name.show",
        "edit"    => "$name.edit",
        "store"   => "$name.store",
        "update"  => "$name.update",
        "destroy" => "$name.destroy",
    ];
}