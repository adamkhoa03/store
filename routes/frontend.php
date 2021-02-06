<?php

Route::group(['namespace' => 'Site'], function () {
    Route::get('/','IndexController@index')->name('index');

    //Cart
    Route::get('gio-hang', 'CartController@cart')->name('cart.index');
    Route::get('thanh-toan', 'CartController@checkout')->name('cart.checkout');
    Route::get('hoan-tat', 'CartController@result')->name('cart.result');

    //About
    Route::get('gioi-thieu', 'AboutController@index')->name('about.index');

    //Contact
    Route::get('lien-he', 'ContactController@contact')->name('contact.index');

    //Product
    Route::get('san-pham/{id}.html', 'ProductController@product')->name('product.detail');

    //Shop
    Route::get('cua-hang.html', 'ShopController@shop')->name('shop.index');
});

?>