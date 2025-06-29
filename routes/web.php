<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HotelDetails;
use App\Http\Controllers\visitorController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\guestController;
use App\Http\Controllers\logindataController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\FilterData;
use App\Http\Controllers\productController;




Route::get('/optimizeapp', function () {
    Artisan::call('optimize:clear');
    return "application optimize successfully !!";
});
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/rooms', 'rooms')->name('rooms');
Route::view('/resources', 'resources')->name('resources');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog-detail', 'blog-detail')->name('blog-detail');
Route::view('/faq', 'faq')->name('faq');
Route::view('/room-detail', 'room-detail')->name('room-detail');
Route::view('/review', 'review')->name('review');
Route::view('/store', 'store')->name('store');
Route::post('/mail-send', [EmailController::class, 'mailsubmit'])->name('mail');



Route::middleware(['filterdata'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/hotel-data/hotel-details', [HotelDetails::class, 'hoteldetails'])->name('hotel-details');
    Route::get('/hotel-data/new-employe', [HotelDetails::class, 'newemploye'])->name('newemploye');
    Route::post('/hotel-data/store-new', [HotelDetails::class, 'storeNew'])->name('storenew');
    Route::get('/hotel-data/edit-employe/{id}', [HotelDetails::class, 'edit'])->name('edit-employe');
    Route::put('/hotel-data/edit-employe/update/{id}', [HotelDetails::class, 'update'])->name('update');
    Route::get('/hotel-data/delete/{id}', [HotelDetails::class, 'destroy'])->name('delete');

    Route::get('/visitors/visitor-detail', [visitorController::class, 'visitordetail'])->name('visitordetail');
    Route::get('/visitors/visitor-add', [visitorController::class, 'visitoradd'])->name('visitoradd');
    Route::post('/visitors/visitor-new', [visitorController::class, 'visitorNew'])->name('visitornew');
    Route::get('/visitors/visitor-edit/{id}', [visitorController::class, 'edit'])->name('edit-visitor');
    Route::put('/visitors/visitor-edit/update/{id}', [visitorController::class, 'update'])->name('updatevisitor');
    Route::get('/visitors/delete/{id}', [visitorController::class, 'destroy'])->name('visitordelete');
    Route::view('/visitors.visitor-detail', 'visitors.visitor-detail')->name('visitior-detail');

    Route::get('/bills/bils',       [guestController::class, 'billsdetail'])->name('bils');
    Route::get('/bills/addbils',    [guestController::class, 'guestadd'])->name('addbils');
    Route::get('/bills/paymentbill', [guestController::class, 'paymentbills'])->name('paymentbills');
    Route::post('/bills/bills-new', [guestController::class, 'billsnew'])->name('billsnew');
    Route::post('/available-rooms', [guestController::class, 'getAvailableRooms'])->name('available.rooms');



    Route::get('/allproduct',[productController::class, 'allproduct'])->name('allproduct');
    Route::get('/newproduct',[productController::class, 'newproduct'])->name('newproduct');
    Route::post('/add-newproduct', [productController::class, 'addproduct'])->name('addproduct');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::post('/add-category', [ProductController::class, 'addCategory'])->name('add.category');





});

// login
Route::view('/login', 'login.login')->name('login');
Route::post('/login/newlogin', [logindataController::class, 'newlogin'])->name('newlogin');
Route::post('/veroficationlogin', [logindataController::class, 'veroficationlogin'])->name('veroficationlogin');
Route::post('/logout', [UserController::class, 'destroy'])->name('logout');

