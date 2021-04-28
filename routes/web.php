<?php



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function (){

    // Authentication Routes
    Auth::routes(['register' => false]);

    // Admin Panel
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function (){
         // employees managment
        Route::resource('user','UserController');

        // roles and permision managment
        Route::resource('roles', 'RoleController');

        // Branches
        Route::resource('branch','BranchController');

        Route::get('/show-gifts-orders', 'GiftController@showGiftsOrders')->name('showGiftsOrders');
        Route::get('/show-points-transactions', 'GiftController@showPointsTransactions')->name('showPointsTransactions');
        Route::resource('gift','GiftController');

        Route::get('/points-value', 'GiftController@pointsValue')->name('pointsValue');
        Route::post('/points-value-post', 'GiftController@pointsValuePost')->name('pointsValuePost');

        // Admin Dashboard
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/', 'HomeController@index')->name('dashboard');

        Route::resource('customer','CustomerController');
        Route::resource('category','CategoryController');
        Route::resource('item', 'ItemController');
        Route::resource('extra', 'ExtraController');
        Route::resource('without', 'WithoutController');
        Route::resource('order','OrderController');
        Route::resource('offer','OfferController');
        Route::resource('banner','BannerController');
        Route::resource('contact','ContactController');



        // reports
        Route::group(['prefix' => 'reports', 'as' => 'report.'], function() {
            Route::get('customer','ReportController@getCustomer')->name('customer');
            Route::get('order','ReportController@getOrder')->name('order');
            Route::get('item','ReportController@getItem')->name('item');
            Route::get('extra','ReportController@getExtra')->name('extra');
            Route::get('order-status','ReportController@getOrderStatus')->name('order-status');
            Route::get('order-customer','ReportController@getOrderCustomer')->name('order-customer');
            Route::get('income','ReportController@getIncome')->name('income');
            Route::get('order-item','ReportController@getOrderItems')->name('order-item');
        });

        //healthinfo
        Route::group(['prefix' => 'healthinfo', 'as' => 'healthinfo.'], function() {
            Route::get('','HealthInfoController@index')->name('index');
            Route::get('create','HealthInfoController@create')->name('create');
            Route::post('store','HealthInfoController@store')->name('store');
            Route::patch('update/{id}','HealthInfoController@update')->name('update');
            Route::get('edit/{id}','HealthInfoController@edit')->name('edit');
            Route::get('show/{id}','HealthInfoController@show')->name('show');
            Route::delete('delete/{id}','HealthInfoController@delete')->name('delete');

        });

        //news
        Route::group(['prefix' => 'news', 'as' => 'news.'], function() {
            Route::get('','NewsController@index')->name('index');
            Route::get('create','NewsController@create')->name('create');
            Route::post('store','NewsController@store')->name('store');
            Route::patch('update/{id}','NewsController@update')->name('update');
            Route::get('edit/{id}','NewsController@edit')->name('edit');
            Route::get('show/{id}','NewsController@show')->name('show');
            Route::delete('delete/{id}','NewsController@delete')->name('delete');

        });

        //careers
        Route::group(['prefix' => 'careers', 'as' => 'careers.'], function() {
            Route::get('','CareersController@index')->name('index');
            Route::get('create','CareersController@create')->name('create');
            Route::post('store','CareersController@store')->name('store');
            Route::patch('update/{id}','CareersController@update')->name('update');
            Route::get('edit/{id}','CareersController@edit')->name('edit');
            Route::get('show/{id}','CareersController@show')->name('show');
            Route::get('{id}','CareersController@changestatus')->name('changestatus');

            Route::delete('delete/{id}','CareersController@delete')->name('delete');

        });

        // AboutUS
        Route::resource('aboutUS','AboutUSController');
        // Gallery
        Route::resource('gallery','GalleryController');
        // Media
        Route::resource('media','MediaController');

        Route::resource('role','RoleController');
        Route::get('/permission/{id}', 'RoleController@permission')->name('get.permission');
        Route::patch('/permissions/{id}', 'RoleController@asignPermission')->name('asign.permission');


    });
// Front routes
    Route::group(['namespace' => 'Website'], function () {

        // aboutUS
        Route::get('/about-us', 'AboutUSController@aboutUSPage')->name('aboutUS.page');
        // gallery
        Route::get('/gallery', 'GalleryController@galleryPage')->name('gallery.page');
        // video
        Route::get('/video/{videoID?}', 'VideoController@videoPage')->name('video.page');
        // contactUS
        Route::get('/contact-us', 'ContactUSController@contactPage')->name('contact.page');
        // contactUS
        Route::get('/menu', 'MenuController@menuPage')->name('menu.page');
        //
        Route::get('/test1', function (){
            return view('website.myOrder');
        });
        Route::get('/test2', function (){
            return view('website.cart');
        });
        Route::get('/test3', function (){
            return view('website.checkout');
        });Route::get('/test4', function (){
            return view('website.signup');
        });Route::get('/test5', function (){
            return view('website.login');
        });Route::get('/test6', function (){
            return view('website.profile');
        });Route::get('/test7', function (){
            return view('website.home');
        });

        Route::get('blog/{id}','NewsController@Blog');
        Route::get('blogs/','NewsController@AllBlogs');
        Route::get('health-info/','HealthInfo@Infos');

    });


    Route::get('/categories/{category}', 'Admin\ItemController@getCategory');

});
