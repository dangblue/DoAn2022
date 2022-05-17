<?php

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
// FE
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/shop', 'HomeController@shop')->name('home.shop');
Route::get('/blog', 'HomeController@blog')->name('home.blog');
Route::get('/contact', 'HomeController@contact')->name('home.contact');
Route::get('/shop-detail', 'HomeController@shopdetail')->name('home.shop-detail');
Route::get('/blog-detail', 'HomeController@blogdetail')->name('home.blog-detail');
Route::get('/shop-cart', 'HomeController@shopcart')->name('home.shop-cart');
Route::get('/check-out', 'HomeController@checkout')->name('home.check-out');

//BE
Route::get('/admin', 'AdminController@dashboard')->name('home.admin');
Route::get('/dashboard', 'AdminController@show_dashboard')->name('home.show_dashboard');
Route::post('/admin-dashboard', 'AdminController@admin_dashboard')->name('home.admin_dashboard');
Route::get('/logout', 'AdminController@logout');

//Category Product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/all-category-product  ', 'CategoryProduct@all_category_product');
Route::post('/save-category-product  ', 'CategoryProduct@save_category_product');

