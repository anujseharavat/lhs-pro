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

//Route::get('/', function () {
////    todo: add controller
//    $products = App\Product::all();
//    $columns = DB::getSchemaBuilder()->getColumnListing('Product');
//    //array_shift($columns);
//    $columns = array_diff($columns, array('id', 'created_at', 'updated_at'));
//    //dd($products);
//    //dd($columns->first());
//    return view('index', compact('products', 'columns'));
//})->name('home');

Route::get('/', 'ProductController@index')->name('home');
Route::prefix('shop')->group(function () {
    Route::get('add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
    Route::get('shop-cart', 'ProductController@getCart')->name('product.shopCart');
    Route::get('checkout', 'ProductController@getCheckout')->name('checkout')->middleware('auth');
    Route::post('checkout', 'ProductController@postCheckout')->name('checkout')->middleware('auth');
});
//Route::get('/shop/shop-cart', function () {
//    return view('shop.shop-cart');
// })->name('product.shoppingCart');
//Route::get('/shop/shop-cart', 'ShopController@index');

Route::prefix('user')->group(function () {
    Route::middleware('guest')->group(function() {
        Route::get('register', 'RegistrationController@create');
        Route::post('register', 'RegistrationController@store');

        Route::get('login', 'SessionController@create')->name('login');
        Route::post('login', 'SessionController@store');
    });
    Route::middleware('auth')->group(function(){
        Route::get('logout/{id}', 'SessionController@destroy')->name('logout');
        Route::get('dashboard', 'UserController@getUserDashboard');
        Route::get('order-history', 'UserController@getUserOrderHistory');
    });
});


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
