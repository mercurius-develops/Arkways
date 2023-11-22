<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\transaction_controller;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//CUSTOMER
Route::get('customer/customer_detail',
[customer_controller::class, 'show_customer_detail'])->name('customer.show_detail');
Route::get('customer/show_customer', [customer_controller::class, 'readcustomerdata'])->name('customer.show');
//route for customer transaction
Route::get('customer/customer_detail/addTrans/{id}', [customer_controller::class, 'addTrans'])->name('customer.addTrans');
Route::post('customer/customerTrans', [customer_controller::class, 'updateTrans'])->name('customer.updateTrans');

//route for update operation
Route::get('customer/show_customer/edit/{id}', [customer_controller::class, 'edit'])->name('customer.edit');
Route::post('customer/edit_customer/{id}', [customer_controller::class, 'update'])->name('customer.update');
Route::get('/download-document/{customerId}', [customer_controller::class, 'downloadDocument'])->name('download.document');

//route for delete operation
Route::get('customer/show_customer/delete/{id}', [customer_controller::class, 'delete'])->name('customer.delete');
Route::get('customer/signup', 
[customer_controller::class, 'show_customer_signup'])->name('customer.signup');
Route::post('customer/store', 
[customer_controller::class, 'store'])->name('customer.store');
// Route::get('customer/show_customer', 
// [customer_controller::class, 'show_customer_page'])->name('customer.show');

//TRANSACTION
Route::get('transaction/signup',
[transaction_controller::class, 'show_transaction_signup'])->name('transaction.signup');
Route::post('transaction/store', 
[transaction_controller::class, 'store'])->name('transaction.store');
Route::get('transaction/show_transaction', 
[transaction_controller::class, 'readtransactions'])->name('transaction.show');

//route for update operation
Route::get('transaction/show_transaction/edit/{id}', [transaction_controller::class, 'edit'])->name('transaction.edit');
Route::post('transaction/edit_transaction/{id}', [transaction_controller::class, 'update'])->name('transaction.update');
//route for delete operation
Route::get('transaction/show_transaction/delete/{id}', [transaction_controller::class, 'delete'])->name('transaction.delete');


//REF PROGRAM
Route::get('customer/{id}', 
[customer_controller::class, 'show'])->name('customer.showdetail');

