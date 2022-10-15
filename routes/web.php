<?php

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

Route::get('comments/randam', [App\Http\Controllers\greetAPP::class, 'randam']);
Route::get('comments/{time}', [App\Http\Controllers\greetAPP::class, 'greetTime']);
Route::get('comments/freeword/{variable}', [App\Http\Controllers\greetAPP::class, 'freeword']);
