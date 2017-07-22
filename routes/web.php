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

Route::get('/', 'CourseController@index')->name('home');
Route::prefix('shop')->group(function () {
    Route::get('add-to-cart/{id}', 'ShopController@getAddToCart')->name('product.addToCart');
    Route::get('shop-cart', 'ShopController@getCart')->name('product.shopCart');
    Route::get('checkout', 'ShopController@getCheckout')->name('checkout')->middleware('auth');
    Route::post('checkout', 'ShopController@postCheckout')->name('checkout')->middleware('auth');
    Route::get('remove-from-cart/{id}', 'ShopController@getRemoveFromCart')->name('cart.remove');
});
Route::get('/test', 'ShopController@test')->name('test');
Route::get('/course', 'ShopController@course')->name('course');

//Route::prefix('room')->group(function () {
//    Route::middleware('auth')->group(function(){
//        Route::get('index/{id}', 'UserController@index')->name('room.index');
//        Route::get('dashboard', 'UserController@getUserDashboard');
//    });
//});
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
        //room
        Route::get('index', 'UserController@getUserIndex');
        Route::get('profile', 'UserController@getUserProfile');
        Route::post('profile', 'UserController@postUserProfile');
        Route::get('order-history-room', 'UserController@getUserOrderHistoryRoom');

        Route::get('purchase-history', 'UserController@getPurchaseHistory');
        Route::get('reset-password', 'UserController@getResetPassword');
        Route::post('reset-password', 'UserController@postResetPassword');
        //end room
        Route::get('order-history', 'UserController@getUserOrderHistory');
        Route::get('semester-room', 'UserController@getUserSemesterRoom');
        Route::get('lesson', 'UserController@getUserLessonRoom');
    });
});


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
