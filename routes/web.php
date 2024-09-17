<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\CheckAdminLogin;
use App\Http\Middleware\CheckMemberLogin;
use App\Repositories\Product\TrangSucRepository;
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

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index']);




Route::get('shop/trangsuc/{id}', [App\Http\Controllers\Front\ShopController::class, 'ChiTietTrangSuc']);
Route::get('shop/danhmuctrangsuc/{id}', [App\Http\Controllers\Front\ShopController::class, 'DanhMucTrangSuc']);
Route::get('shop/timkiemtrangsuc', [App\Http\Controllers\Front\ShopController::class, 'TimKiemTrangSuc']);
Route::get('shop/timkiemtrangsuc', [App\Http\Controllers\Front\ShopController::class, 'TimKiemTrangSuc']);
Route::prefix('cart')->group(function () {
    Route::get('add/{id}', [\App\Http\Controllers\Front\CartController::class, 'add']);
    Route::get('delete', [\App\Http\Controllers\Front\CartController::class, 'delete']);
    Route::get('/', [\App\Http\Controllers\Front\CartController::class, 'index']);
    Route::get('destroy', [\App\Http\Controllers\Front\CartController::class, 'destroy']);
    Route::get('update', [\App\Http\Controllers\Front\CartController::class, 'update']);
    
});


Route::prefix('checkout')->group(function () {
    Route::get('', [\App\Http\Controllers\Front\CheckOutController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\Front\CheckOutController::class, 'addOrder']);
});
Route::prefix('account')->group(function () {
    Route::get('login', [\App\Http\Controllers\Front\AccountController::class, 'login']);
    Route::post('login', [\App\Http\Controllers\Front\AccountController::class, 'checkLogin']);
    Route::get('register', [\App\Http\Controllers\Front\AccountController::class, 'register']);
    Route::post('register', [\App\Http\Controllers\Front\AccountController::class, 'postRegister']);
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.user.index');
    Route::resource('user', UserController::class);

Route::get('/admin/user', [UserController::class, 'index']);
Route::get('/admin/user/create', [UserController::class, 'create']);
Route::post('/admin/user', [UserController::class, 'store']);
Route::get('/admin/user/{id}', [UserController::class, 'show']);

});








Route::prefix('admin')->group(function () {
    Route::get('user', [\App\Http\Controllers\Admin\UserController::class, 'index']);
    // Route::resource('user',\App\Http\Controllers\Admin\UserController::class);
    Route::get('product', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'show']);
   
    //Route::get('admin/product/create', [\App\Http\Controllers\Admin\ProductController::class, 'create']);
    Route::post('product', [\App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::put('product/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::delete('product/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
    Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create']);
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::prefix('login')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\HomeController::class, 'getLogin']);
        Route::post('', [\App\Http\Controllers\Admin\HomeController::class, 'postLogin']);
      
    });
   
  

});