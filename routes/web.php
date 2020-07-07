<?php

Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail');

Route::get('/', function () {
    return redirect('/shops');
});
