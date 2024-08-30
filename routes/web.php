<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrudProductUserController;
use App\Http\Controllers\HomeCountroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UsersController::class, 'login'])->name('login');

Route::get('/register', [UsersController::class, 'register'])->name('register');

Route::get('/logout', [UsersController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/loginpost', [UsersController::class, 'postlogin'])->name('loginpost');

Route::post('/register', [UsersController::class, 'postregister'])->name('postregister');

Route::get('/profile', [UsersController::class, 'my_account'])->name('my_account')->middleware('auth');

Route::post('/profile/edit', [UsersController::class, 'my_account_stor'])->name('my_account_stor')->middleware('auth');

Route::get('/show/product/{id}', [CrudProductUserController::class, 'showproduct'])->name('product_show');

Route::get('/create/product', [CrudProductUserController::class, 'create_product'])->middleware('auth')->name('create_product');

Route::post('/store/product', [CrudProductUserController::class, 'user_product_store'])->middleware('auth')->name('user_product_store');

Route::get('/product/show', [CrudProductUserController::class, 'my_product'])->middleware('auth')->name('my_product');

Route::get('/product/delete/{id}', [CrudProductUserController::class, 'my_product_delete'])->middleware('auth')->name('my_product_delete');

Route::get('/edit/product/{id}', [CrudProductUserController::class, 'my_product_edit'])->middleware('auth')->name('product_edit');

Route::post('/update/product/{id}', [CrudProductUserController::class, 'my_product_update'])->middleware('auth')->name('my_product_update');

Route::get('/product/active/{id}', [CrudProductUserController::class, 'stutaccpet'])->name('productaccpet')->middleware('auth');

Route::get('/product/pending/{id}', [CrudProductUserController::class, 'stutasremove'])->name('productremove')->middleware('auth');


Route::get('/', [HomeCountroller::class, 'indexpage'])->name('pagehome');
// 
Route::get('/about', [HomeCountroller::class, 'aboutpage'])->name('pageabout');

Route::get('/contact', [HomeCountroller::class, 'contactpage'])->name('pagecontact');


Route::get('/featur', [HomeCountroller::class, 'featurespage'])->name('pagefeatur');

Route::get('/product', [HomeCountroller::class, 'productpage'])->name('pageproduct');
//R

Route::prefix('admin')->group(function () {

    Route::get('/dashborad', [HomeCountroller::class, 'index'])->middleware('auth')->name('home');

    Route::get('/product', [ProductController::class, 'indexproduct'])->name('product')->middleware('auth');

    Route::get('/product/create', [ProductController::class, 'createproduct'])->name('productcreate')->middleware('auth');

    Route::post('/product/store', [ProductController::class, 'storeproduct'])->name('productstore')->middleware('auth');

    Route::get('/product/edit/{id}', [ProductController::class, 'editproduct'])->name('productedit')->middleware('auth');

    Route::post('/product/update/{id}', [ProductController::class, 'updateproduct'])->name('productupdate')->middleware('auth');

    Route::get('/product/delete/{id}', [ProductController::class, 'destroyproduct'])->name('productdelete')->middleware('auth');

    Route::get('/product/active/{id}', [ProductController::class, 'stutaccpet'])->name('productstutaccpet')->middleware('auth');

    Route::get('/product/pending/{id}', [ProductController::class, 'stutasremove'])->name('productstutasremove')->middleware('auth');

    Route::get('/product/is_futshred/true/{id}', [ProductController::class, 'is_futshredtrue'])->name('productsis_futshredtrue')->middleware('auth');

    Route::get('/product/is_futshred/fulse/{id}', [ProductController::class, 'is_futshredfulse'])->name('productis_futshredfulse')->middleware('auth');


    Route::get('/contactus', [AdminController::class, 'indexContactUs'])->name('ContactUsindex')->middleware('auth');

    Route::post('/contact/send', [HomeCountroller::class, 'contactpagestore'])->name('pagecontactstore');

    Route::get('/user', [AdminController::class, 'indexuser'])->name('nameuser')->middleware('auth');

    Route::get('/profile', [AdminController::class, 'my_account_admin'])->name('my_account_admin')->middleware('auth');

    Route::post('/profile/edit', [AdminController::class, 'my_account_stor_admin'])->name('my_account_stor_admin')->middleware('auth');


    Route::get('/staticpages/create', [StaticController::class, 'createsaticpages'])->name('saticpagescreate')->middleware('auth');

    Route::post('/staticpages/store', [StaticController::class, 'storestaic'])->name('staicstore')->middleware('auth');

    Route::get('/staticpages', [StaticController::class, 'indexsaticpages'])->name('staticpages')->middleware('auth');

    Route::get('/staticpages/delete/{id}', [StaticController::class, 'destroystatic'])->name('staticdelete')->middleware('auth');



});