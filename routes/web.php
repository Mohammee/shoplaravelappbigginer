<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/','ShopController@index')->name('shop');

Route::get('/about',function(){
    return view('shop.about');
})->name('shop.about');

Route::get('/services',function(){
    return view('shop.services');
})->name('shop.services');

Route::get('/contact',function(){
    return view('shop.contact');
})->name('shop.contact');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('slide', 'SlideController');
});

