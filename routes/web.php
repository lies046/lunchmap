<?php

Route::get('/shops', 'ShopController@index')->name('shop.list');

Route::get('/', function () {
    return redirect('/shops');
});
