<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PaymentlistController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\BranchController;
use \App\Http\Controllers\LanguageController;
use \App\Http\Controllers\TaxController;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\Billingcontroller;
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


//Route::get('/',[LanguageController::class,'change']);

//USER CONTROLLER
Route::get('adds',[UserController::class,'create']);

Route::post('adds',[UserController::class,'store'])->name('adds.create');
Route::get('modify/{id}',[UserController::class,'edit']);

Route::get('see/{id}',[UserController::class,'view']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('user',[UserController::class,'display']);
Route::post('search',[UserController::class,'search'])->name('search');

//Paymentontroller Controller
Route::get('pays',[PaymentlistController::class,'insert']);
Route::post('payment',[PaymentlistController::class,'store'])->name('add.insert');
Route::get('view',[PaymentlistController::class,'display']);

//ADMIN CONTROLLER
Route::get('admin',[AdminController::class,'insert']);
Route::post('register',[AdminController::class,'store'])->name('admin.insert');
Route::get('select',[AdminController::class,'select']);
Route::get('login',[AdminController::class,'login']);
Route::post('login',[AdminController::class,'login_user'])->name('login');
Route::get('display',[AdminController::class,'dashbord']);
Route::get('forgot',[AdminController::class,'forgot']);
Route::post('forgot',[AdminController::class,'forgotpassword'])->name('forgot.post');
Route::get('reset/{email}/{remember_token}',[AdminController::class,'reset'])->name('reset');
Route::post('resetpd',[AdminController::class,'resetpassword'])->name('resetpwd');
//Product Controller
Route::get('add-product',[ProductController::class,'create']);
Route::post('add-products',[ProductController::class,'store'])->name('product.store');
Route::get('product',[ProductController::class,'display']);
Route::get('p-edit/{id}',[ProductController::class,'edit']);
Route::post('p-up',[ProductController::class,'update'])->name('product.update');
Route::get('p-view/{id}',[ProductController::class,'view']);
Route::get('p-delete/{id}',[ProductController::class,'delete']);

//Branch Controller
Route::get('add-branch',[BranchController::class,'insert']);
Route::post('add-branch',[BranchController::class,'store'])->name('branch.insert');
Route::get('branch',[BranchController::class,'display']);
Route::get('b-edit/{id}',[BranchController::class,'edit']);
Route::post('b-edit',[BranchController::class,'update'])->name('branch.update');
Route::get('b-view/{id}',[BranchController::class,'view']);
Route::get('b-delete/{id}',[BranchController::class,'delete']);

//Tax Controller
Route::get('add-tax',[TaxController::class,'create']);
Route::post('add-tax',[TaxController::class,'store'])->name('tax.create');
Route::get('tax',[TaxController::class,'display']);
Route::get('t-edit/{id}',[TaxController::class,'edit']);
Route::post('t-edit',[TaxController::class,'update'])->name('tax.update');
Route::get('t-view/{id}',[TaxController::class,'view']);
Route::get('t-delete/{id}',[TaxController::class,'delete']);


//Cilent Controller
Route::get('home',[ClientController::class,'home']);
Route::get('reg',[ClientController::class,'reg']);
Route::post('reg',[ClientController::class,'store'])->name('reg.create');
Route::get('log',[ClientController::class,'log']);
Route::get('cart',[ClientController::class,'cart']);
Route::get('iphone14',[ClientController::class,'getproduct']);
Route::get('iphone13',[ClientController::class,'getproduct2']);
Route::get('speaker',[ClientController::class,'getproduct3']);

Route::post('log',[ClientController::class,'user'])->name('login.user');


//Billing Controller
Route::get('add-bill',[Billingcontroller::class,'insert']);
Route::post('bill',[Billingcontroller::class,'store'])->name('bill.store');
Route::get('shipping',[Billingcontroller::class,'display']);
Route::get('paybill',[Billingcontroller::class,'paybill']);
Route::post('make',[Billingcontroller::class,'ins'])->name('makepay');
Route::get('payview',[Billingcontroller::class,'view']);

Route::get('init', function(){
    return response()->json([
        'success' => true,
        'message' => 'Updated Successfully',
        'code' => 200
    ]);
});
