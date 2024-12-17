<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('frontend/index');
})->name('home');
Route::get('/getIndex', function () {
    // dd(auth()->user());
    return view('frontend/index');
})->name('getIndex');
Route::get('/shop', function () {
    return view('frontend/shop');
})->name('shop');

// Route::get('/shop-grid', function () {
//     return view('frontend/shop-grid');
// })->name('shop-grid');

Route::view('shop-grid', 'frontend/shop')->name('shop-grid');

Route::get('/shop-left-sidebar', function () {
    return view('frontend/shop-left-sidebar');
})->name('shop-left-sidebar');
Route::get('/shop-right-sidebar', function () {
    return view('frontend/shop-right-sidebar');
})->name('shop-right-sidebar');
Route::get('/product-details', function () {
    return view('frontend/product-details');
})->name('product-details');
Route::get('/cart', function () {
    return view('frontend/cart');
})->name('cart');
Route::get('/wishlist', function () {
    return view('frontend/wishlist');
})->name('wishlist');
Route::get('/checkout', function () {
    return view('frontend/checkout');
})->name('checkout');
Route::get('/order-tracking', function () {
    return view('frontend/order-tracking');
})->name('order-tracking');

Route::get('/account', function () {
    return view('frontend/account');
})->name('account');
Route::get('/login', function () {
    return view('frontend/login');
})->name('login');
Route::get('/register', function () {
    return view('frontend/register');
})->name('register');
Route::get('/blog', function () {
    return view('frontend/blog');
})->name('blog');
Route::get('/blog-grid', function () {
    return view('frontend/blog-grid');
})->name('blog-grid');
Route::get('/blog-left-sidebar', function () {
    return view('frontend/blog-left-sidebar');
})->name('blog-left-sidebar');
Route::get('/blog-right-sidebar', function () {
    return view('frontend/blog-right-sidebar');
})->name('blog-right-sidebar');
Route::get('/blog-details', function () {
    return view('frontend/blog-details');
})->name('blog-details');
Route::get('/about', function () {
    return view('frontend/about');
})->name('about');
Route::get('/service', function () {
    return view('frontend/service');
})->name('service');
Route::get('/service-details', function () {
    return view('frontend/service-details');
})->name('service-details');
Route::get('/portfolio', function () {
    return view('frontend/portfolio');
})->name('portfolio');
Route::get('/portfolio-2', function () {
    return view('frontend/portfolio-2');
})->name('portfolio-2');
Route::get('/portfolio-details', function () {
    return view('frontend/portfolio-details');
})->name('portfolio-details');
Route::get('/team', function () {
    return view('frontend/team');
})->name('team');
Route::get('/team-details', function () {
    return view('frontend/team-details');
})->name('team-details');
Route::get('/faq', function () {
    return view('frontend/faq');
})->name('faq');
Route::get('/history', function () {
    return view('frontend/history');
})->name('history');
Route::get('/contact', function () {
    return view('frontend/contact');
})->name('contact');
// Route::get('/home', function () {
//     return view('frontend/home');
// })->name('home');
Route::get('/404', function () {
    return view('frontend/404');
})->name('404');
Route::get('/coming-soon', function () {
    return view('frontend/coming-soon');
})->name('coming-soon');
Route::get('/locations', function () {
    return view('frontend/locations');
})->name('locations');

Route::post('/sign-in', function () {
    return view('frontend/locations');
})->name('signIn');


Route::post('sign-n', [LoginController::class, 'register'])->name('signIn');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', function(){
    Auth::logout();
    return back();
})->name('logout');


// Route::view('locations', 'locations')->name('locations');
// Route::view('about', 'about')->name('About');
// Route::view('service', 'service')->name('Services');
// Route::view('service-details', 'service-details')->name('Service Details');
// Route::view('portfolio', 'portfolio')->name('portfolio');
// Route::view('portfolio-details', 'portfolio-details')->name('Portfolio Details');
// Route::view('Portfolio-2', 'Portfolio-2')->name('Portfolio - 02');
// Route::view('team', 'team')->name('Team');
// Route::view('team-details', 'team-details')->name('Team Details');
// Route::view('faq', 'faq')->name('FAQ');
// Route::view('history', 'history')->name('History');
// Route::view('locations', 'locations')->name('locations');
// Route::view('contact', 'contact')->name('contact');
// Route::view('home', 'home')->name('home');
// Route::view('coming-soon', 'coming-soon')->name('coming-soon');
// Route::view('account', 'account')->name('account');
// Route::view('wishlist', 'wishlist')->name('Wish List');
// Route::view('login', 'login')->name('Login');
// Route::view('order-tracking', 'order-tracking')->name('order-tracking');
// // Route::view('getIndex2', 'getIndex2')->name('getIndex2');

Route::get('/admin/getIndex', [LoginController::class, 'getIndex'])->name('admin.getIndex');