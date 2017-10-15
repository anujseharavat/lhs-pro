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
//    return view('index', compact('products', 'columns'));SubjectSelect
//})->name('home');

Route::get('/', 'CourseController@index')->name('home');
Route::get('/features', 'CourseController@getFeatures')->name('features');
Route::prefix('shop')->group(function () {
    Route::post('add-to-cart', 'ShopController@getAddToCart')->name('add_to_cart');
    Route::get('shop-cart', 'ShopController@getCart')->name('product.shopCart');
    Route::get('checkout', 'ShopController@getCheckout')->name('checkout')->middleware('auth');
    Route::post('checkout', 'ShopController@postCheckout')->name('checkout')->middleware('auth');
    Route::get('remove-from-cart/{id}', 'ShopController@getRemoveFromCart')->name('cart.remove');
    Route::get('subject-select', 'ShopController@getSubjectSelect')->name('SubjectSelect');
    Route::post('subject-select', 'ShopController@postSubjectSelect')->name('SubjectSelect');
});
//Route::post('orderdata', function (){
//    dd('test');
//})->name('orderdata');

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
        Route::post('register', 'RegistrationController@store')->name('register_user');

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
        Route::get('order-history-room', 'UserController@getUserOrderHistoryRoom')->name('order-history');
        Route::post('course-activate', 'UserController@courseActivate')->name('course-activate');

        Route::get('purchase-history', 'UserController@getPurchaseHistory');
        Route::get('reset-password', 'UserController@getResetPassword');
        Route::post('reset-password', 'UserController@postResetPassword');
        //end room
        Route::get('order-history', 'UserController@getUserOrderHistory');
        Route::get('semester-room/{id}', 'UserController@getUserSemesterRoom')->name('semester-room');
        Route::get('lesson2', 'UserController@getUserLessonRoom');
        Route::get('lesson-room/{id}', 'UserController@getUserLesson')->name('lesson-room');
        Route::get('content-room/{id}', 'UserController@getUserContent');
        Route::post('content-room', 'UserController@postUserContentStatus')->name('user-content-status');
        Route::get('content-room2', 'UserController@postUserContentStatus2')->name('user-content-status2');
        Route::get('progress-summary', 'UserController@getProgressSummary')->name('progress_summary');
    });
});


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
