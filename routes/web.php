<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Auth\AdminController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\AdminproductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminordersController;

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

Route::get('/loginuser', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('registration', [RegistrationController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [RegistrationController::class, 'customRegistration'])->name('register.custom');
Route::get('/productcategory', [CategoryController::class, 'index'])->name('category')->middleware('auth');
Route::get('/productcategory/image/{imageName}', 'App\Http\Controllers\CategoryController@image')->name('categories.image');
Route::get('/productcategory/show', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/product/{slug}', [ProductController::class, 'index'])->name('product')->middleware('auth');
Route::get('/products/image/{imageName}', 'App\Http\Controllers\ProductController@image')->name('products.image');
Route::post('/products/review/store/{product_id}', 'App\Http\Controllers\ProductController@storeReview')->name('products.review');
Route::get('/products/review/{product_id}', 'App\Http\Controllers\ProductController@getReview')->name('products.index.review');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show');

Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\Auth\AdminController::class, 'loginForm']);
    Route::get('/login', [Admin\Auth\AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [Admin\Auth\AdminController::class, 'login'])->name('admin.login');
    Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/logout', [Admin\Auth\AdminController::class, 'logout'])->name('admin.logout');
});
Auth::routes();

Route::get('/admin', [Admin\Auth\AdminController::class, 'loginForm']);

Route::name('admin.')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
    });
});

Route::get('/datauser', [DatauserController::class, 'datauser']);
Route::get('/datauser/tambah','App\Http\Controllers\DatauserController@tambah');
Route::post('/datauser/store','App\Http\Controllers\DatauserController@store');
Route::get('/datauser/edit/{id}','App\Http\Controllers\DatauserController@edit');
Route::post('/datauser/update','App\Http\Controllers\DatauserController@update');
Route::get('/datauser/hapus/{id}','App\Http\Controllers\DatauserController@hapus');
Route::get('/productsadmin', [AdminproductController::class, 'index'])->name('admin.products.index');
Route::get('/productsadmin/create', [AdminproductController::class, 'create'])->name('admin.products.create');
Route::post('/productsadmin/store', [AdminproductController::class, 'store'])->name('admin.products.store');
Route::post('/productsadmin/update', [AdminproductController::class, 'update'])->name('admin.products.update');
Route::get('/productsadmin/edit/{id}', [AdminproductController::class, 'edit'])->name('admin.products.edit');
Route::get('/productsadmin/{id}', [AdminproductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/ordersadmin', [AdminordersController::class, 'index'])->name('orders.index');
Route::post('/ordersadmin/update', [AdminordersController::class, 'update'])->name('orders.update');
Route::get('/ordersadmin/edit/{id}', [AdminordersController::class, 'edit'])->name('orders.edit');
Route::get('/ordersadmin/{id}', [AdminordersController::class, 'destroy'])->name('orders.destroy');

Route::get('/carts', 'App\Http\Controllers\CartController@index')->name('carts.index');
Route::get('/carts/add/{id}', 'App\Http\Controllers\CartController@add')->name('carts.add');
Route::patch('carts/update', 'App\Http\Controllers\CartController@update')->name('carts.update');
Route::delete('carts/remove', 'App\Http\Controllers\CartController@remove')->name('carts.remove');
Route::get('/storage/images/{imageName}', [CartController::class, 'image'])->name('storage.images');

Route::get('/payment/{total}', 'App\Http\Controllers\CartController@payment')->name('payment');

Route::get('/mail', function () {
    \Mail::to('laodemuhammadfitrah18@gmail.com')
        ->send(new \App\Mail\PostMail('Mengirim Email Menggunakan SMTP Laravel 8', 'La Ode Muhammmad Fitrah'));
    return 'Terkirim';
});
Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'send'])->name('send.email');