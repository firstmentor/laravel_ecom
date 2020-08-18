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

// Route::get('/', function () {
//     return view('welcome');
// });




//Frontend route
Route::get('/','IndexController@index');
Route::get('/product_details/{id}','ProductController@product_details');

//*************Route For Add To Cart
Route::match(['get','post'],'/addCart','ProductController@addtoCart');
//*************Route For Cart
Route::match(['get','post'],'/cart','ProductController@cart');
Route::get('/cart/delete/{id}','ProductController@deleCart');
Route::get('/cart/update-quantity/{id}/{quantity}','ProductController@updatecartquantity');






//admin data
Route::get('dashboard','AdminController@dashboard');

//Banner Routes (Admin)
Route::match(['get','post'],'add_banners','BannerController@add_banners');
Route::get('view_banners','BannerController@view_banners');
Route::match(['get','post'],'/edit_banners/{id}','BannerController@edit_banners');
     //delete single banner
     Route::match(['get','post'],'/delete_banner/{id}','BannerController@delete_banner');
     //delete multiple banners
     Route::post('/delete_multiple_banners','BannerController@delete_multiple_banners');

//category Route
Route::match(['get','post'],'/add_category','CategoryController@addCategory');
Route::match(['get','post'],'/view_category','CategoryController@viewcategory');
Route::match(['get','post'],'/edit_category/{id}','CategoryController@editcategory');
Route::match(['get','post'],'/delete_category/{id}','CategoryController@deletecategory');
Route::get('/category_status/{id}','CategoryController@category_status');


//Product Add
Route::match(['get','post'],'/add_product','ProductController@addProduct');
Route::get('view_products','ProductController@view_products');

Route::match(['get','post'],'/edit_products/{id}','ProductController@edit_products');
//delete multiple products
Route::post('/delete_multiple_products','ProductController@delete_multiple_products');
Route::match(['get','post'],'/add_images/{id}','ProductController@add_images');
//delete single product
Route::match(['get','post'],'/delete_products/{id}','ProductController@delete_products');



    // **************Coupon Route***********************

Route::match(['get','post'],'/add_coupon','CouponsController@addcoupon');
Route::match(['get','post'],'/view_coupon','CouponsController@viewcoupon');
Route::match(['get','post'],'/admin/edit_coupon/{id}','CouponsController@editcoupon');
Route::match(['get','post'],'/admin/delete_coupon/{id}','CouponsController@deletecoupon');
Route::post('/admin/update-coupon-status','CouponsController@updateStatus');

 // **************Apply Coupon Code Route***********************	

  Route::post('/cart/apply-coupon','ProductController@applyCoupon');


