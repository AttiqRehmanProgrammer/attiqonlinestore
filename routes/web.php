<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\productController;

use App\Models\product;
// $table-> string('title');
// $table->text('description');
// $table->string('price');
// $table->string('image');
/*
|------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/detail/{id}', [App\Http\Controllers\user\frontendcontroller::class, 'details'])->name('detail');
Route::get('/buy/{id}', [App\Http\Controllers\Admin\ordercontroller::class, 'buy'])->name('buy');

Route::get('/', function () {
    return view('welcome');
});
// Route::get('fronttemp', function () {
//     return view('userlayouts.maincontent');
// });

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\user\userController::class, 'user'])->name('user');

Route::get('/user', [App\Http\Controllers\user\userController::class, 'products'])->name('products');

// Route::get('/usertemp', [App\Http\Controllers\HomeController::class, 'usertemp'])->name('usertemp');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
		Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
	});
});
// form product route
Route::get('/form/product', [productController::class, 'createproductForm']);
Route::post('/postproduct', [productController::class, 'productpost'])->name('validate.form');
// Table product route
Route::get('/table/view', [productController::class, 'tableget']);
Route::get('/product/delete/{id}', [productController::class,'delete'])->name('product.delete'); 
Route::get('/product/edit/{id}', [productController::class,'edit'])->name('product.edit'); 
Route::post('/product/upadate{id}', [productController::class,'update']);
Route::get('/order',[App\Http\Controllers\Admin\orderController::class, 'index'])->name('admin.orde');
// Route::get('/table/showtdata', [productController::class,'showdata']);
Route::get('/order/delete/{id}',[App\Http\Controllers\Admin\orderController::class, 'orderdelete'])->name('order.orde');