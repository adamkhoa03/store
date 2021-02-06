<?php
 //Login
 Route::group(['namespace'=>'Admin','middleware'=>'checklogin'], function () {
    Route::get('login', 'LoginController@getLogin')->name('admin.login');
    Route::post('login', 'LoginController@postLogin');
   
});

//Logout
Route::group(['namespace'=>'Admin'], function () {
    Route::get('logout', 'LogoutController@logout')->name('logout');
});

Route::group(['prefix' => 'quan-tri','namespace'=>'Admin','middleware'=>'checkadmin'], function () {

    //dashboard
    Route::get('/', 'AdminController@index')->name('admin.index');

    //User
    Route::group(['prefix' => 'quan-tri-vien','namespace'=>'User'], function () {
        Route::get('/', 'UserController@user')->name('user.index');
        Route::get('them-quan-tri.html','UserController@getCreate')->name('user.create');
        Route::post('them-quan-tri.html','UserController@postCreate');
        Route::get('sua-quan-tri/{id}.html', 'UserController@getEdit')->name('user.edit');
        Route::post('sua-quan-tri/{id}.html', 'UserController@postEdit');
        Route::get('xoa-quan-tri/{id}', 'UserController@delete')->name('user.delete');
    });

    //Category
    Route::group(['prefix' => 'danh-muc','namespace'=>'Category'], function () {
        Route::get('/', 'CategoryController@getCategory')->name('category.index');
        Route::post('/', 'CategoryController@postCategory');
        Route::get('sua-danh-muc/{id}.html', 'CategoryController@getEdit')->name('category.edit');
        Route::post('sua-danh-muc/{id}.html', 'CategoryController@postEdit');
        Route::get('xoa-danh-muc/{id}', 'CategoryController@delete')->name('category.delete');
    });

    //Product
    Route::group(['prefix' => 'san-pham','namespace'=>'Product'], function () {
        Route::get('/', 'ProductController@product')->name('product.index');
        Route::get('them-san-pham.html', 'ProductController@getAdd')->name('product.add');
        Route::post('them-san-pham.html', 'ProductController@postAdd');
        Route::get('sua-san-pham/{id}.html', 'ProductController@getEdit')->name('product.edit');
        Route::post('sua-san-pham/{id}.html', 'ProductController@postEdit');
        Route::get('xoa-san-pham/{id}', 'ProductController@delete')->name('product.delete');
    });

    //Order
    Route::group(['prefix' => 'don-hang','namespace'=>'Order'], function () {
        Route::get('/', 'OrderController@index')->name('order.index');
        Route::get('da-xu-ly.html', 'OrderController@processed')->name('order.processed');
    });
});

?>