<?php
//fron-end
  Route::get('/', [
    'uses'=>'NewShopController@index',
    'as' => '/'
  ]);
//front-end
  Route::get('/category-product/{id}', [
    'uses'=>'NewShopController@categoryProduct',
    'as' => 'category-product'
  ]);
  //front-end
  Route::get('/product-details/{id}', [
    'uses'=>'NewShopController@productDetails',
    'as' => 'product-details'
  ]);

  //front-end
    Route::get('/contact-us', [
      'uses'=>'NewShopController@contactUs',
      'as' => 'contact-us'
    ]);

//cart
  Route::post('/cart/add', [
    'uses'=>'NewShopCartController@addToCart',
    'as' => 'add-to-cart'
  ]);
//cart
Route::get('/cart/show', [
  'uses'=>'NewShopCartController@showCart',
  'as' => 'show-cart'
]);
//cart
Route::get('/cart/delete/{id}', [
  'uses'=>'NewShopCartController@deleteCart',
  'as' => 'delete-cart-item'
]);
//cart
Route::post('/cart/update', [
  'uses'=>'NewShopCartController@updateCart',
  'as' => 'update-cart'
]);
//cart
Route::get('/checkout', [
  'uses'=>'CheckoutController@index',
  'as' => 'checkout'
]);

//cart
Route::post('/customer/registration', [
  'uses'=>'CheckoutController@customerSignUp',
  'as' => 'customer-sign-up'
]);

//cart
Route::post('/checkout/customer-login', [
  'uses'=>'CheckoutController@customerLoginCheck',
  'as' => 'customer-login'
]);

//cart--logout
Route::post('/checkout/customer-logout', [
  'uses'=>'CheckoutController@customerLogout',
  'as' => 'customer-logout'
]);

//cart--new user/customer-login
Route::get('/checkout/new-customer-login', [
  'uses'=>'CheckoutController@newCustomerLoginCheck',
  'as' => 'new-customer-login'
]);




//cart
Route::get('/checkout/shipping', [
  'uses'=>'CheckoutController@shippingForm',
  'as' => 'customer-shipping'
]);

//cart
Route::post('/shipping/save', [
  'uses'=>'CheckoutController@saveShippingInfo',
  'as' => 'new-shipping'
]);

//cart
Route::get('/checkout/payment', [
  'uses'=>'CheckoutController@paymentForm',
  'as' => 'checkput-payment'
]);

//cart
Route::post('/checkout/order', [
  'uses'=>'CheckoutController@newOrder',
  'as' => 'new-order'
]);

//cart
Route::get('/complete/order', [
  'uses'=>'CheckoutController@completeOrder',
  'as' => 'complete-order'
]);



//for admin login and all related from laravel package download
  Auth::routes();


//Middleware group
  Route::group(['middleware'=>'newShop'], function(){
      Route::get('/dashboard', 'HomeController@index')->name('dashboard');


      //Admin category addition
       Route::get('/category/create-category','CategoryController@createCategory');
       Route::post('/category/save-category','CategoryController@storeCategory');
       Route::get('/category/manage-category','CategoryController@manageCategory');
       Route::get('/category/edit-category/{id}','CategoryController@editCategory');
       Route::post('/category/update-category','CategoryController@updateCategory');
       Route::get('/category/delete-category/{id}','CategoryController@deleteCategory');

       //admin manufacturer
       Route::get('/manufacturer/create-manu','ManufacturerController@createManu');
       Route::post('/manufacturer/save-manu','ManufacturerController@storeManu');
       Route::get('/manufacturer/manage-manu','ManufacturerController@manageManu');
       Route::get('/manufacturer/edit-manu/{id}','ManufacturerController@editManu');
       Route::post('/manufacturer/update-manu','ManufacturerController@updateManu');
       Route::get('/manufacturer/delete-manu/{id}','ManufacturerController@deleteManu');


       //admin product
       Route::get('/product/create-product','ProductController@createProduct');
       Route::post('/product/save-product','ProductController@storeProduct');
       Route::get('/product/manage-product','ProductController@manageProduct');
       Route::get('/product/view-product/{id}','ProductController@viewProduct');
       Route::get('/product/edit-product/{id}','ProductController@editProduct');
       Route::post('/product/update-product','ProductController@updateProduct');
       Route::get('/product/delete-product/{id}','ProductController@deleteProduct');


       //order control
       Route::get('/order/manage-order', 'OrderController@manageOrder');
       Route::get('/order/view-order-detail/{id}', 'OrderController@viewOrderDetail');
       Route::get('/order/order-invoice/{id}', 'OrderController@viewOrderInvoice');
       Route::get('/order/order-invoice-dwnld/{id}','OrderController@downloadOrderInvoice');
});
