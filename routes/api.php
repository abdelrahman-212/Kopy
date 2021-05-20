<?php
//
//use Illuminate\Http\Request;
//
///*
//|--------------------------------------------------------------------------
//| API Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register API routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| is assigned the "api" middleware group. Enjoy building your API!
//|
//*/
//
//// Authintication routes
//Route::group(['prefix' => 'auth'], function () {
//    Route::post('login', 'Api\AuthController@login');
//    Route::post('login/cashier', 'Api\AuthController@loginCashier');
//    Route::post('register', 'Api\AuthController@register');
//    Route::get('activate/{token}', 'Api\AuthController@signupActivate');
//    Route::post('login/google', 'Api\AuthController@loginWithGoogle');
//    Route::post('login/facebook', 'Api\AuthController@loginWithFacebook');
//
//    Route::group(['prefix' => 'password'], function () {
//        Route::post('create', 'Api\PasswordResetController@create');
//        Route::get('find/{token}', 'Api\PasswordResetController@find');
//        Route::post('reset', 'Api\PasswordResetController@createNewPassword');
//    });
//
//    Route::post('resend-code', 'Api\AuthController@resendCode');
//
//    Route::group(['middleware' => 'auth:api'], function () {
//        Route::get('user', 'Api\AuthController@getUser');
//        Route::put('user', 'Api\AuthController@updateUser');
//        Route::get('logout', 'Api\AuthController@logout');
//    });
//});
//
//Route::get('get-branch-working-hours', 'Api\BranchesController@getBranchWorkingHours');
//
//Route::middleware('web')->group(function () {
//
//    Route::get('get-user-points', 'Api\AuthController@getUserPoints');
//    Route::post('change-user-points', 'Api\AuthController@changeUserPoints');
//    Route::get('get-gifts', 'Api\GiftsController@getGifts');
//    Route::post('buy-gifts', 'Api\GiftsController@buyGifts');
//    Route::get('get-user-gifts-orders', 'Api\GiftsController@getUserGiftsOrders');
//
//    Route::group(['prefix' => 'cart'], function () {
//        Route::get('get-cart', 'Api\CartController@getCart');
//        Route::post('add-cart', 'Api\CartController@addCart');
//        Route::post('delete-cart', 'Api\CartController@deleteCart');
//        Route::post('update-quantity', 'Api\CartController@updateQuantity');
//    });
//
//    Route::group(['prefix' => 'banners'], function () {
//        Route::get('', 'Api\BannerController@index');
//    });
//    Route::group(['prefix' => 'contacts'], function () {
//        Route::post('create', 'Api\ContactController@store');
//    });
//    // branch routes
//    Route::group(['prefix' => 'branches'], function () {
//        Route::get('', 'Api\BranchesController@index');
//        Route::Get('/{branch}', 'Api\BranchesController@show');
//    });
//
//
//
//    Route::post('/set-push-token', "Api\NotificationController@setPushToken")->name('api.setPushToken');
//    Route::post('/set-first-offer-flag', "Api\AuthController@setFirstOfferFlag")->name('api.setFirstOfferFlag');
//
//    Route::get('/get-user-orders', "Api\OrdersController@getUserOrders")->name('api.getUserOrders');
//
//    // orders routes
//    Route::group(['prefix' => 'orders'], function () {
//
//
//        // list all orders
//        Route::get('/', "Api\OrdersController@index")->name('api.orders.index');
//
//        // create an order
//        Route::post('/', "Api\OrdersController@store")->name('api.orders.store');
//
//        // get specific order by id
//        Route::get('/{order}', "Api\OrdersController@getById")->name('api.orders.getById');
//
//        // accept an order
//        Route::put('/{order}/accept', "Api\OrdersController@acceptOrder")->name('api.orders.accept');
//
//        // reject an order
//        Route::put('/{order}/reject', "Api\OrdersController@rejectOrder")->name('api.orders.reject');
//
//        // complete an order
//        Route::put('/{order}/complete', "Api\OrdersController@completeOrder")->name('api.orders.complete');
//
//        // cancel an order
//        Route::put('/{order}/cancel', "Api\OrdersController@cancelOrder")->name('api.orders.cancel');
//
//        Route::post('/branch', "Api\OrdersController@getBranch")->name('api.orders.branch');
//    });
//
//    // offers routes
//    Route::group(['prefix' => 'offers'], function () {
//        Route::get('/', 'Api\OffersController@index')->name("offers.index");
//        Route::get('/{offer}', 'Api\OffersController@get');
//        Route::get('/check/{order_id}', 'Api\OffersController@check');
//    });
//
//    // Address routes
//    Route::resource('/address', 'Api\AddressesController');
//    Route::post('/addressmaps', 'Api\AddressesController@sotreWithMaps');
//});
//
//// Menu routes
//Route::group(['prefix' => 'menu'], function () {
//
//    // categories
//    Route::get('/categories', 'Api\MenuController@getAllCategories');
//    Route::post('/categories/{category}', 'Api\MenuController@getCategory');
//
//    // items
//    Route::post('/categories/{category}/items', 'Api\MenuController@getItems');
//    // Route::get('/items/{item}/', 'Api\MenuController@getCategory');
//
//    // extras
//    Route::get('/categories/{category}/extras', 'Api\MenuController@getExtras');
//    // Route::get('/extras/{extra}/', 'Api\MenuController@getCategory');
//
//    Route::get('/categories/{category}/withouts', 'Api\MenuController@getWithouts');
//});
//
//// helper endpoints
//Route::get('/cities', "Api\HelperController@getCities");
//Route::get('/cities/{city}/areas', "Api\HelperController@getAreas");
//Route::get('api/v1/cities/search', 'Api\HelperController@search')
//    ->name('api.cities.search');
//// Front routes
//Route::group(['prefix' => 'website'], function () {
//
//    // aboutUS
//    Route::get('/aboutUS', 'Api\FrontController@getAboutUS');
//    // gallery
//    Route::get('/gallery', 'Api\FrontController@getGallery');
//    // media
//    Route::get('/media/{videoID?}', 'Api\FrontController@getVideo');
//    // news
//    Route::get('/news', 'Api\FrontController@getAllNews');
//    Route::get('/news/{newID}', 'Api\FrontController@getNew');
//    // health info
//    Route::get('/health-info', 'Api\FrontController@getAllHealthInfo');
//    // careers
//    Route::get('/careers', 'Api\FrontController@getAllJobs');
//    Route::post('/careers', 'Api\MenuController@jobRequest');
//
//
//});
