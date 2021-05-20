<?php

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    // Authentication Routes
    Route::group(['prefix' => 'admin'], function () {
        Auth::routes(['register' => false]);
    });
    Route::get('/categories/{category}', 'Admin\ItemController@getCategory');

    // Admin Panel
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
        // employees managment
        Route::resource('user', 'UserController');

        // roles and permision managment
        Route::resource('roles', 'RoleController');

        // Branches
        Route::resource('branch', 'BranchController');

        Route::get('/show-gifts-orders', 'GiftController@showGiftsOrders')->name('showGiftsOrders');
        Route::get('/show-points-transactions', 'GiftController@showPointsTransactions')->name('showPointsTransactions');
        Route::resource('gift', 'GiftController');

        Route::get('/points-value', 'GiftController@pointsValue')->name('pointsValue');
        Route::post('/points-value-post', 'GiftController@pointsValuePost')->name('pointsValuePost');

        // Admin Dashboard
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/', 'HomeController@index')->name('dashboard');

        Route::resource('customer', 'CustomerController');
        Route::resource('category', 'CategoryController');
        Route::resource('item', 'ItemController');
        Route::resource('extra', 'ExtraController');
        Route::resource('without', 'WithoutController');
        Route::resource('order', 'OrderController');
        Route::resource('offer', 'OfferController');
        Route::resource('banner', 'BannerController');
        Route::resource('contact', 'ContactController');


        // reports
        Route::group(['prefix' => 'reports', 'as' => 'report.'], function () {
            Route::get('customer', 'ReportController@getCustomer')->name('customer');
            Route::get('order', 'ReportController@getOrder')->name('order');
            Route::get('item', 'ReportController@getItem')->name('item');
            Route::get('extra', 'ReportController@getExtra')->name('extra');
            Route::get('order-status', 'ReportController@getOrderStatus')->name('order-status');
            Route::get('order-customer', 'ReportController@getOrderCustomer')->name('order-customer');
            Route::get('income', 'ReportController@getIncome')->name('income');
            Route::get('order-item', 'ReportController@getOrderItems')->name('order-item');
        });

        //healthinfo
        Route::group(['prefix' => 'healthinfo', 'as' => 'healthinfo.'], function () {
            Route::get('', 'HealthInfoController@index')->name('index');
            Route::get('create', 'HealthInfoController@create')->name('create');
            Route::post('store', 'HealthInfoController@store')->name('store');
            Route::patch('update/{id}', 'HealthInfoController@update')->name('update');
            Route::get('edit/{id}', 'HealthInfoController@edit')->name('edit');
            Route::get('show/{id}', 'HealthInfoController@show')->name('show');
            Route::delete('delete/{id}', 'HealthInfoController@delete')->name('delete');

        });

        //news
        Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
            Route::get('', 'NewsController@index')->name('index');
            Route::get('create', 'NewsController@create')->name('create');
            Route::post('store', 'NewsController@store')->name('store');
            Route::patch('update/{id}', 'NewsController@update')->name('update');
            Route::get('edit/{id}', 'NewsController@edit')->name('edit');
            Route::get('show/{id}', 'NewsController@show')->name('show');
            Route::delete('delete/{id}', 'NewsController@delete')->name('delete');

        });

        //careers
        Route::group(['prefix' => 'careers', 'as' => 'careers.'], function () {
            Route::get('', 'CareersController@index')->name('index');
            Route::get('create', 'CareersController@create')->name('create');
            Route::post('store', 'CareersController@store')->name('store');
            Route::patch('update/{id}', 'CareersController@update')->name('update');
            Route::get('edit/{id}', 'CareersController@edit')->name('edit');
            Route::get('show/{id}', 'CareersController@show')->name('show');
            Route::get('{id}', 'CareersController@changestatus')->name('changestatus');
            Route::get('/{id}/applications', 'CareersController@GetApplications')->name('getapp');
            Route::delete('delete/{id}', 'CareersController@delete')->name('delete');

        });

        // AboutUS
        Route::resource('aboutUS', 'AboutUSController');
        // Gallery
        Route::resource('gallery', 'GalleryController');
        // Media
        Route::resource('media', 'MediaController');

        Route::resource('role', 'RoleController');
        Route::get('/permission/{id}', 'RoleController@permission')->name('get.permission');
        Route::patch('/permissions/{id}', 'RoleController@asignPermission')->name('asign.permission');


    });


    // Front routes
    Route::group(['namespace' => 'Website'], function () {

        // home
        Route::get('/', 'HomeController@homePage')->name('home.page');
        // aboutUS
        Route::get('/about-us', 'AboutUSController@aboutUSPage')->name('aboutUS.page');
        // gallery
        Route::get('/gallery', 'GalleryController@galleryPage')->name('gallery.page');
        // video
        Route::get('/video/{videoID?}', 'VideoController@videoPage')->name('video.page');
        // contactUS
        Route::get('/contact-us', 'ContactUSController@contactPage')->name('contact.page');
        // menu
        Route::get('/menu', 'MenuController@menuPage')->name('menu.page');


        Route::get('/careers/', [\App\Http\Controllers\Website\CareersControllers::class, 'AllJobs'])->name('careers.all');
        Route::get('/get-career/{id}', [\App\Http\Controllers\Website\CareersControllers::class, 'GetJob'])->name('get.career');
        Route::get('/apply-form/{id}', [\App\Http\Controllers\Website\CareersControllers::class, 'ApplyJobForm'])->name('apply.form');
        Route::post('/career-request/{id}', [\App\Http\Controllers\Website\CareersControllers::class, 'CareerRequest'])->name('career.request');

        Route::get('/Blogs/', [\App\Http\Controllers\Website\NewsController::class, 'AllBlogs'])->name('news.all');
        Route::get('/Blog/{id}', [\App\Http\Controllers\Website\NewsController::class, 'Blog'])->name('get.new');
        Route::get('/health-infos/', [\App\Http\Controllers\Website\HealthInfo::class, 'Infos'])->name('health-infos.all');

        Route::get('/get-sign-in', [\App\Http\Controllers\Website\AuthController::class, 'get_login'])->name('get.login');
        Route::post('/signin', [\App\Http\Controllers\Website\AuthController::class, 'login'])->name('sign.in');

        Route::get('/signup', [\App\Http\Controllers\Website\AuthController::class, 'get_sign_up'])->middleware('web')->name('get.sign.up');
        Route::post('/get-sign-up', [\App\Http\Controllers\Website\AuthController::class, 'sign_up'])->name('sign.up'); //auth routes

        /*********** Auth Routes ***********/
        Route::group(['middleware' => ['auth']], function () {

            //for all ordering route needs branch_id
            Route::group(['middleware' => 'service'], function () {
                // menu
                Route::get('/item/{category_id}/{item_id}', 'MenuController@itemPage')->name('item.page');

                // add to cart
                Route::post('/cart', 'CartController@addCart')->name('add.cart');

                // offers
                Route::get('/offers', 'OffersController@get_offers')->name('offers');
                Route::get('/offers/{oferID}', 'OffersController@offerItems')->name('offer.item');

                // payment
                Route::get('/payment','PaymentController@index')->name('get.payment');

                Route::post('/payment','PaymentController@index')->name('payment');
                Route::post('payment/order','PaymentController@get_payment')->name('do.payment');
                Route::get('/payment/make-order','OrdersController@make_order_payment')->name('make-order.payment');

                /*****************Begin Checkout And Orders Routes ****************/
                Route::post('get-checkout/', [\App\Http\Controllers\Website\CartController::class, 'get_checkout'])->name('checkout');
                Route::post('make-order/', [\App\Http\Controllers\Website\OrdersController::class, 'make_order'])->name('make_order');
                Route::get('my-orders/', [\App\Http\Controllers\Website\OrdersController::class, 'my_orders'])->name('get.orders');
                Route::get('order-details/{id}/{order?}', [\App\Http\Controllers\Website\OrdersController::class, 'my_orders_details'])->name('order.details');
                Route::get('re-order/{id}', [\App\Http\Controllers\Website\OrdersController::class, 're_order'])->name('re.order');
                /*****************End Checkout And Orders Routes ****************/
            });

            //profile
            Route::get('/profile/', [\App\Http\Controllers\Website\AddressController::class, 'get_address'])->name('profile');
            Route::post('/update-profile/', [\App\Http\Controllers\Website\UserController::class, 'update_user'])->name('update.profile');
            Route::get('/delete_address/{address}', [\App\Http\Controllers\Website\AddressController::class, 'delete'])->name('delete_address');
            Route::post('/new-address/', [\App\Http\Controllers\Website\AddressController::class, 'store'])->name('new.address');
            Route::get('/update/{address}', [\App\Http\Controllers\Website\AddressController::class, 'update'])->name('update_address');

            //log out
            Route::get('/sign-out', [\App\Http\Controllers\Website\AuthController::class, 'logout'])->name('signout');

            //Loyalty Route
            Route::get('/loyalty/', [\App\Http\Controllers\Website\LoyalityController::class, 'get_loyalty'])->name('loyalty');
            Route::get('/exchange/', [\App\Http\Controllers\Website\LoyalityController::class, 'get_loyalty_exchange'])->name('exchange.points');

            //cart Route
            Route::get('/get-cart/', [\App\Http\Controllers\Website\CartController::class, 'get_cart'])->name('get.cart');
            Route::post('/delete-cart/', [\App\Http\Controllers\Website\CartController::class, 'delete_cart'])->name('delete.cart');
            Route::post('/update-quantity/', [\App\Http\Controllers\Website\CartController::class, 'update_quantity'])->name('update.quantity');
            Route::get('/get-check/', [\App\Http\Controllers\Website\CartController::class, 'get_check'])->name('get.check');

            //choose service delivery or take away
            Route::get('/service', 'ServiceController@servicePage')->name('service.page');
            Route::get('/delivery', 'ServiceController@deliveryPage')->name('delivery.page');
            Route::get('/takeaway', 'ServiceController@takeawayPage')->name('takeaway.page');
            Route::get('/takeaway/{branch_id}/{service_type}', 'ServiceController@takeawayBranch')->name('takeaway.branch');
        });

    });

});

