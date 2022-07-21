<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My_controller;
use App\Http\Controllers\Test_controller;
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

Route::get('/add_emp', [My_controller::class, 'add']);
Route::get('/dlt_emp', [My_controller::class, 'dlt']);
Route::get('/upd_emp', [My_controller::class, 'upd']);
