<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;




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


//fontend
Route::get('/index',[MasterController::class,'getIndex']);
Route::get('/producttype/{type}',[MasterController::class,'product_type']);
Route::get('/product/{id}',[MasterController::class,'product']);
Route::get('/product/{id}',[MasterController::class,'product']);
Route::get('/addcart/{id}',[MasterController::class,'addCart']);
Route::get('/deletecart/{id}',[MasterController::class,'deleteCart']);
Route::get('/checkout',[MasterController::class,'getcheckout']);
Route::post('/checkout',[MasterController::class,'postcheckout']);
Route::get('/contact',[MasterController::class,'getContact']);
Route::get('/about',[MasterController::class,'getAbout']);
Route::get('/alert',[MasterController::class,'getAlert']);
Route::get('/xoahet/{id}',[MasterController::class,'getXoahet']);
Route::get('/login',[FormController::class,'getLogin']);
Route::post('/login',[FormController::class,'postLogin']);
Route::get('/signup',[FormController::class,'getSignup']);
Route::post('/signup',[FormController::class,'postSignup']);
Route::get('/dang-xuat',[FormController::class,'getDangxuat']);
Route::get('/tim-kiem',[FormController::class,'getTimKiem']);

//backend

Route::group(['prefix'=>'admin'],function () {
    Route::get('layout',[AdminController::class,'admin']);
    Route::get('login',[AdminController::class,'getLoginAdmin']);
    Route::post('login',[AdminController::class,'postLoginAdmin']);
    Route::get('logout',[AdminController::class,'getLogoutAdmin']);
    Route::get('information',[AdminController::class,'getUserInfo']);
    Route::get('/listbill',[AdminController::class,"getBills"]);
    Route::get('/updatebill/{id}',[AdminController::class,"getEditBills"]);
    Route::post('/updatebill/{id}',[AdminController::class,"postEditBills"]);
    Route::get('/listCustomer',[AdminController::class,"getCustomer"]);
    Route::get('/deleteCustomer/{id}',[AdminController::class,"deleteCustomer"]);

});

//typeproduct
Route::group(['prefix'=>'type'],function () {
    Route::get('listType',[AdminController::class,'getListType']);
    Route::get('add',[AdminController::class,'getAdd']);
    Route::post('add',[AdminController::class,'postAdd']);
    Route::get('delete/{id}',[AdminController::class,'getDelete']);
    Route::get('update/{id}',[AdminController::class,'getUpdate']);
    Route::post('update/{id}',[AdminController::class,'postUpdate']);
    Route::get('listProduct',[ProductController::class,'getList']);

    Route::get('addProduct',[ProductController::class,'getProduct']);
    Route::post('addProduct',[ProductController::class,'postProduct']);
    
     Route::get('deleteProduct/{id}',[ProductController::class,'deleteProduct']);
    Route::get('updateProduct/{id}',[ProductController::class,'getUpdateProduct']);
    Route::post('updateProduct/{id}',[ProductController::class,'postUpdateProduct']);

});




