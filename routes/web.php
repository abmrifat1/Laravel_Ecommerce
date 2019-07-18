<?php

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

Route::get('/', 'WelcomeController@index');
Route::get('/product-category/{id}', 'WelcomeController@category');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');


Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@ShowCart');
Route::post('/update-cart-product', 'CartController@UpdateCart');
Route::get('/delete-cart-product/{id}', 'CartController@deleteCart');
Route::get('/direct-add-to-cart/{id}', 'CartController@directAddToCart');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/customer-login', 'CheckoutController@customerLogin');
Route::get('/customer-login-first', 'CheckoutController@customerLoginFirst');
Route::post('/customer-logout', 'CheckoutController@customerLogout');


Route::post('/new-customer', 'CheckoutController@saveCustomerInfo');
Route::get('/shipping-info', 'CheckoutController@showShippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentInfo');
Route::post('/new-order', 'CheckoutController@saveOrderInfo');

Route::group(['middleware'=>'OrderMiddleware'], function() {
    Route::get('/order-info', 'OrderController@showOrderInfo');
    Route::get('/view-order-details/{id}', 'OrderController@viewOrderDetails');
    Route::get('/view-order-invoice/{id}', 'OrderController@viewOrderInvoice');
//pdf
    Route::get('/pdf', 'OrderController@myPdf');
    Route::get('/download-invoice/{id}', 'OrderController@downloadOderInvoice');
//pdf
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'CategoryMiddleware'], function() {
    Route::get('/add-category', 'CategoryController@addCategory');

    Route::get('/manage-category', 'CategoryController@manageCategory');

    Route::post('/new-category', 'CategoryController@saveCategoryInfo');

    Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
    Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');

    Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');

    Route::post('/update-category', 'CategoryController@updateCategoryInfo');
    Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');
});


Route::group(['middleware'=>'BandMiddleware'], function() {
    Route::get('/add-brand', 'BrandController@addBrand');
    Route::post('/new-brand', 'BrandController@saveBrandInfo');

    Route::get('/manage-brand', 'BrandController@manageBrandInfo');
    Route::get('/unpublished-brand/{id}', 'BrandController@unpublishedBrandInfo');
    Route::get('/published-brand/{id}', 'BrandController@publishedBrandInfo');
    Route::get('/edit-brand/{id}', 'BrandController@editBrandInfo');
    Route::post('/update-brand', 'BrandController@updateBrandInfo');
    Route::get('/delete-brand/{id}', 'BrandController@deleteBrandInfo');
});

Route::group(['middleware'=>'BITMmiddleware'], function(){

    Route::get ('/add-product', 'ProductController@addProduct');
    Route::post ('/new-product', 'ProductController@saveProductInfo');
    Route::get ('/manage-product', 'ProductController@manageProductInfo');
    Route::get ('/view-product/{id}', 'ProductController@viewProductInfo');
    Route::get ('/edit-product/{id}', 'ProductController@editProductInfo');
    Route::post('/update-product', 'ProductController@updateProductInfo');
});





