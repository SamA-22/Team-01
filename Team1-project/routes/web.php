<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'is_Admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

//for the Admin to access the website
Route::get('/', function () {
    return view('index');
});

/**Route to the dashboard page */
Route::get('/admin.dashboard', function () {
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

Route::get('admin.users', [AdminController::class, 'viewUsers']);

Route::get('delete_user/{id}', [AdminController::class, 'delete_user']);

Route::get('/dashboard', [AdminController::class, 'show_total']);

Route::get('/products', [ProductController::class, 'getIndex']);

Route::post('/addToCart/{id}', [CartController::class, 'addToCart']);

Route::get('/showCart', [CartController::class, 'showCart']);

Route::get('/removeFromCart/{id}', [CartController::class, 'removeItemFromCart']);

Route::get('/removeFromCart/{id}', [CartController::class, 'removeItemFromCart']);

Route::get('/email', function () {
    return view('email');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


