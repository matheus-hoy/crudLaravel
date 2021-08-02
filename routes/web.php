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

Route::get('/customers/create', "CustomersController@create")->name('customers.create');
Route::get('/customers/{id}/edit', "CustomersController@edit")->name('customers.edit');
Route::get('/customers/{id}', "CustomersController@show")->name('customers.show');
Route::get('/customers', "CustomersController@index")->name('customers.index');
Route::post('/customers', 'CustomersController@store')->name('customers.store');
Route::put('/customers/{id}', 'CustomersController@update')->name('customers.update');



