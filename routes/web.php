<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

//user routes

Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
    session()->forget('user');
    return view('login');
});

Route::post('login',[UserController::class,'login']);
Route::view('register','register');
Route::post('register',[userController::class,'register']);

//customer routes

Route::post('addcustomer',[CustomerController::class,'addCustomer']); //Send form data to controller
Route::GET('customer',[CustomerController::class,'addCustomerview']); //Return add customer view
Route::get('customerlist',[CustomerController::class,'listCustomer']);
Route::get('edit/{id}',[Customercontroller::class,'editCustomer']);
Route::post('update',[CustomerController::class,'updateCustomer'])->name('updatecustomer');
Route::get('view/{id}',[CustomerController::class,'viewCustomer']);
Route::get('delete/{id}',[CustomerController::class,'deleteCustomer']);

//item routes

Route::post('additem',[ItemController::class,'addItem'])->name('additem');
Route::get('item',[ItemController::class,'addItemView']);
Route::get('itemslist',[ItemController::class,'listItem']);
Route::get('edititem/{id}',[ItemController::class,'editItem']);
Route::post('updateitem',[ItemController::class,'updateItem'])->name('updateitem');
Route::get('deleteitem/{id}',[ItemController::class,'deleteCustomer']);
Route::get('viewitem/{id}',[ItemController::class,'viewItem']);


//report routes

Route::get('invoicereport',[ReportController::class,'invoiceReport']);
Route::get('invoiceitemreport',[ReportController::class,'invoiceItemReport']);
Route::get('itemreport',[ReportController::class,'itemReport']);
Route::post('search',[ReportController::class,'search']);
