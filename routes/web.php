<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController; 
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/getIndex', function () {
    return view('index');
})->name('getIndex');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

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

        Route::get('/products/{id}/edit', [AdminController::class, 'edit'])->name('products.edit');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
        Route::post('/update-settings', [AdminController::class, 'updateSettings'])->name('update-settings');

        Route::post('/products/{id}/update', [AdminController::class, 'update'])->name('products.update');
       

        Route::post('/import-product', [ProductsController::class, 'import'])->name('products.import');

        // Miss mahotarma ji 
        //isko admin waale section me rkhna tha
        // file nahi route
        Route::get('admin-edit', [AdminController::class, 'admin-edit'])->name('admin-edit');
        

        
    // alag routes banane k liye above line copy paste
 // url() method me aage ka parameter dete hain
        // route('') me last ka parameter
        // upar wale route ko agar url() se access karna hai to url('dashboard') iss case me dono hi same hain to frk nhi pta lagega
        // Route::get('dashboard', 'index')->name('dashboard');
        // kewal route fir comma, fir controler k under ka function `index`;
    });
});







Route::view('shop-grid', 'shop')->name('shop-grid');

Route::get('/shop-left-sidebar', function () {
    return view('shop-left-sidebar');
})->name('shop-left-sidebar');
Route::get('/shop-right-sidebar', function () {
    return view('shop-right-sidebar');
})->name('shop-right-sidebar');
Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/order-tracking', function () {
    return view('order-tracking');
})->name('order-tracking');

Route::get('/account', function () {
    return view('account');
})->name('account');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-left-sidebar', function () {
    return view('blog-left-sidebar');
})->name('blog-left-sidebar');
Route::get('/blog-right-sidebar', function () {
    return view('blog-right-sidebar');
})->name('blog-right-sidebar');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/service-details', function () {
    return view('service-details');
})->name('service-details');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/portfolio-2', function () {
    return view('portfolio-2');
})->name('portfolio-2');
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio-details');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/team-details', function () {
    return view('team-details');
})->name('team-details');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/history', function () {
    return view('history');
})->name('history');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/home', function () {
//     return view('home');
// })->name('home');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/locations', function () {
    return view('locations');
})->name('locations');

// ab apne pas login k liye 2 routes hain
// 1. `login` ye login form open karane k liye : ye GET method ka hai
// 2. `sign-in` ye login karane k liye : ye POST
// sign-up register karane k liye
// dhyan rkkhne ki ye baat hai ki routes ka name same na hone paaye kabhi

Route::post('sign-up', [LoginController::class, 'register'])->name('signUp');
Route::post('sign-in', [LoginController::class, 'login'])->name('sign-in');
Route::get('logout', function(){
    Auth::logout();
    return back();
})->name('logout');

// Route::resource('products', ProductsController::class);
Route::get('products', [ProductsController::class, 'index'])->name('products');
Route::get('delete-product', [ProductsController::class, 'delete'])->name('delete-product');
Route::get('edit-product', [ProductsController::class, 'edit'])->name('edit-product');


Route::get('/file-import',[UserController::class,
            'importView'])->name('import-view'); 
    Route::post('/import',[UserController::class,
            'import'])->name('import'); 
    Route::get('/export-users',[UserController::class,
            'exportUsers'])->name('export-users');


