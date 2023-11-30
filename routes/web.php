<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\OderAdminController;
use App\Http\Controllers\Users\RegisterController;
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
//admin
Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::prefix('admin')->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('admin');
    Route::get('main', [MainController::class, 'index']);

    #Product
    Route::prefix('products')->group(function () {
        Route::get('add', [ProductAdminController::class, 'index'])->name('add');
        Route::post('add', [ProductAdminController::class, 'addProduct']);
        Route::get('list', [ProductAdminController::class, 'show']);
        Route::get('edit/{id}', [ProductAdminController::class, 'showData']);
        Route::POST('edit', [ProductAdminController::class, 'update']);
        Route::get('destroy/{id}', [ProductAdminController::class, 'delete']);
    });
    // user
    Route::prefix('sliders')->group(function(){
        Route::get('list',[UserAdminController::class,'list']);
        Route::get('destroy/{id}', [UserAdminController::class, 'delete']);
    });
    Route::get('customers',[OderAdminController::class,'list']);
    Route::get('customers/view/{customer}',[OderAdminController::class,'show']);
    // Route::get('customers/view/{customer}',[OderAdminController::class,'showProduct']);


});



Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::post("/signup",[RegisterController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
 
