<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\AuthController;

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

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('simpanregister', 'App\Http\Controllers\AuthController@simpanregister')->name('simpanregister');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:customer']], function () {
        Route::resource('customer', CustomerController::class);
    });

    Route::resource('crud', crudController::class);
    Route::get('/crud/delete/{id}', [crudController::class, 'destroy'])->name('crud.destroy');
    Route::post('/crud/update/{id}', [crudController::class, 'update'])->name('crud.update');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/customer', function () {
    return view('customer.dashboard');
});

Route::get('/car', 'App\Http\Controllers\CarController@index')->name('car.index');
Route::get('/crud', 'App\Http\Controllers\crudController@index')->name('admin.crud.index');
Route::get('/about', 'App\Http\Controllers\CustomerController@about');

Route::get('/rent', 'App\Http\Controllers\CustomerController@rent');

Route::get('/tambah', function () {
    return view('inputdata');
    });
    
Route::post('/tambahdata', 'App\Http\Controllers\RentController@tambah')->name('tambahdata');

Route::get('/lihatdata', 'App\Http\Controllers\LaporanController@index')->name('admin.lihatdata');
