<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercon;

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

Route::get('/main', [usercon::class,'main']);

Route::get('/profile', [usercon::class,'profile']);

Route::get('/searchBar', [usercon::class,'searchBar']);

Route::get('/vendor', [usercon::class,'vendor']);


