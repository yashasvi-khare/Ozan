<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\MarketProduct;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/getIndex', function () {
    return view('index');
})->name('getIndex');
Route::get('/shop/{id?}', function ($id=null) {
    if($id) {
        $products = MarketProduct::where('brand_id', $id)->get();
    } else {
        $products = MarketProduct::all();
    }
    return view('shop-left-sidebar', compact('products'));
})->name('shop');
Route::view('contact', 'contact')->name('contact');
// Admin Panel

// Aage se is group k routes aise use honge `admin.dashboard`
// lekin login ho chuka hai pahle hi isliye dashboard
Route::group(['prefix'=> 'admin', 'as'=>'admin.'], function(){
    Route::controller(AdminController::class)->group(function(){
        //Route::get('/', function(){})->name('index'); // kewal admin likhne par ye call hoga admin. lagne pr neeche k routes
        // thiik h fir continue karo
        Route::get('dashboard', function(){
            if(Auth::user())
            {
                // login already rahega tabhi index page par le jana hai wrna login first
                return view('admin.index');
            }
            else{
                return redirect()->route('admin.login_view');
            }
        })->name('dashboard');
        Route::get('login', function(){
            return view('admin.login');
        })->name('login_view');
        Route::get('register', function(){
            return view('admin.authentication-register');
        })->name('register_view');
        Route::post('register', [AdminController::class, 'register'])->name('register');
        Route::post('login', [AdminController::class, 'login'])->name('login');
        Route::get('products', [AdminController::class, 'products'])->name('products');
        Route::get('createproduct', [AdminController::class, 'createproduct'])->name('createproduct');
        Route::post('store-product', [AdminController::class, 'store'])->name('store-product');
        Route::view('createmenu', 'admin.createmenu')->name('createMenu');
        Route::view('createbrand', 'admin.createBrand')->name('createBrand');
        Route::view('brands', 'admin.marketBrands')->name('brands');
        Route::post('store-menu', 'storeMenu')->name('storeMenu');
        Route::post('store-brand', 'storeBrand')->name('storeBrand');
        Route::get('remove-menu/{id}', 'deleteMenu')->name('deleteMenu');
        Route::get('remove-brand/{id}', 'deletebrand')->name('deletebrand');
        Route::get('createcafeproduct', [AdminController::class, 'createcafeproduct'])->name('createcafeproduct');
        Route::get('remove-cafe-product/{id}', [AdminController::class, 'removeCafeProduct'])->name('cafeproduct.remove');
        Route::post('productstore', [AdminController::class, 'productstore'])->name('productstore');
        Route::get('/products/{id}/edit', [AdminController::class, 'edit'])->name('products.edit');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
        Route::post('/update-settings', [AdminController::class, 'updateSettings'])->name('update-settings');
        Route::post('/products/{id}/update', [AdminController::class, 'update'])->name('products.update');
        Route::post('/import-product', [ProductsController::class, 'import'])->name('products.import');
        Route::post('/import-cafe-product', [ProductsController::class, 'cafeimport'])->name('cafeproducts.import');
        Route::post('/update-settings/{id}', [AdminController::class, 'updateSettings']);
        Route::get('admin-edit', [AdminController::class, 'admin-edit'])->name('admin-edit');
    });
    Route::get('cafemenus', [AdminController::class, 'cafemenus'])->name('cafemenus');
});

Route::view('/product-details', 'product-details')->name('product-details');
Route::view('/login', 'login')->name('login');
Route::view('/register','register')->name('register');
Route::view('/about', 'about')->name('about');
Route::view('/service-details', 'service-details')->name('service-details');
Route::view('/team-details', 'team-details')->name('team-details');

Route::post('sign-up', [LoginController::class, 'register'])->name('signUp');
Route::post('sign-in', [LoginController::class, 'login'])->name('sign-in');
Route::get('logout', function(){
    Auth::logout();
    return back();
})->name('logout');

Route::get('products', [ProductsController::class, 'index'])->name('products');
Route::get('delete-product', [ProductsController::class, 'delete'])->name('delete-product');
Route::get('edit-product', [ProductsController::class, 'edit'])->name('edit-product');


// Import Routes here
Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,'import'])->name('import');
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');

// Setting routes
Route::get('/admin/cafesettings', [AdminController::class, 'cafesettings'])->name('admin.cafesettings');
Route::get('/admin/cafeproducts', [AdminController::class, 'cafeproducts'])->name('admin.cafeproducts');
Route::get('/admin/{id}/editcafemenus', [AdminController::class, 'editcafemenus'])->name('admin.editcafemenus');
Route::post('/admin/{id}/updateMenu', [AdminController::class, 'updateMenu'])->name('admin.updateMenu');
Route::get('/admin/{id}/editcafeproduct', [AdminController::class, 'editcafeproduct'])->name('admin.editcafeproduct');
Route::post('/admin/{id}/updateProduct', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
