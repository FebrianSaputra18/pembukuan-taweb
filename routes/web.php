<?php

use App\Http\Controllers\Admin\KaryawanController;
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
    return view('home');
});

Route::middleware(['auth', 'role:admin|sales|supplier'])->get('/dashboard', function(){});
Route::get('/sales', function () {
    return view('sales');
});

Route::get('/supplier', function () {
    return view('supplier');
});

// Route::middleware(['auth', 'role:admin'])->resource('admin', KaryawanController::class);

Route::get('/admin', function () {
    return view('admin');
});
