<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
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

//Route to the home page
Route::get('/', function () {
    return view('index');
});

Auth::routes();

//Route to user account page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for the products page
Route::get('/products',[ProductsController::class,'index']);

///////////////////////////////////////////(Admin Routes)/////////////////////////////////////////////////////////////////////
Route::group(['middleware'=>['auth','is_Admin']],function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });

/**Route to Customers view page */
Route::get('/admin.users', function () {
    return view('admin.users');
});


/**Route to My Account Page */
Route::get('/admin.adminAccount', function () {
    return view('admin.adminAccount');
});

//view all website user
Route::get('admin.users',[AdminController::class,'viewUsers']);

//Delete a user
Route::get('delete_user/{id}',[AdminController::class,'delete_user']);


//View Inventory
Route::get('viewProducts',[ProductsController::class,'viewInventory']);

//Add Product
Route::get('addProducts',[ProductsController::class,'addProducts']);
Route::post('add-product',[ProductsController::class,'add']);

//Edit Product
Route::get('edit-product/{id}', [ProductsController::class, 'edit']);
Route::put('update-product/{id}', [ProductsController::class, 'update']);

//Delete product
Route::get('delete_product/{id}',[ProductsController::class,'delete']);

//View all orders
Route::get('/all_orders',[ProductsController::class,'viewAllOrders']);

//Display Total Inverntory
Route::get('/dashboard',[AdminController::class,'show_total']);


});
//////////////////////////////////////////////////////////////////////////////////////////////////////




