<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/getIndex', function () {
    // dd(auth()->user());
    return view('index');
})->name('getIndex');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Route::get('/shop-grid', function () {
//     return view('shop-grid');
// })->name('shop-grid');

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

Route::post('/sign-in', function () {
    return view('locations');
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
