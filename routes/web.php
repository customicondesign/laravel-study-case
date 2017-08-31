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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-form', 'HomeController@myform');
Route::post('/my-form', 'HomeController@myformPost');

Route::get('myproducts', 'ProductsController@index');

Route::get('article', 'ArticleController@index');
Route::post('article', 'ArticleController@store');

Route::get('my-chart', 'ChartController@index');


// route for view/blade file
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
// route for post request
Route::post('paypal', array('as' => 'paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
// route for check status responce
Route::get('paypal', array('as' => 'status','uses' => 'AddMoneyController@getPaymentStatus',));


Route::get('newproduct', 'ProductController@index');
Route::delete('newproduct/{id}', 'ProductController@destory');

Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax',   'ItemAjaxController');