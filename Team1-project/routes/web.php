<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\User;
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
Route::get('/all_orders',[AdminController::class,'viewAllOrders']);


//Display Total Inverntory
Route::get('/dashboard',[AdminController::class,'show_total']);


});
//////////////////////////////////Email//////////////////////////////////////////////////////

Route::get('/email', function () {
    return view('email');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


////////////////////////////Shopping Cart////////////////////////////////////////////
Route::get('/products', [ProductsController::class, 'getIndex']);

Route::post('/addToCart/{id}', [CartController::class, 'addToCart']);

Route::get('/showCart', [CartController::class, 'showCart']);

Route::get('/removeFromCart/{id}', [CartController::class, 'removeItemFromCart']);

Route::get('/removeFromCart/{id}', [CartController::class, 'removeItemFromCart']);


/////////////////////////////////////////////////////////////////////
Route::get('/sizeChart', [ProductsController::class, 'chart']);

Route::get('/checkout', function () {
    return view('checkout');
});

///////////////////////////Terms and Conditions//////////////////////////////////////
Route::get('/privacyNotice', function () {
    return view('terms.privacyNotice');
});

Route::get('/refundPolicy', function () {
    return view('terms.refundPolicy');
});

Route::get('/term&conditions', function () {
    return view('terms.termsAndConditions');
});


//Route::get('/orders', function () {
  // return view('userOrders');
//});

Route::post('/orders', [OrderController::class, 'index']);

Route::get('/orders-history', [OrderController::class, 'viewOrders']);





