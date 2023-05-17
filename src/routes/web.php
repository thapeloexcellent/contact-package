<?php

Route::group(['namespace'=>'Thapelo\Contact\Http\Controllers'],function(){

    Route::get('contact','ContactController@index')->name('contact');
    Route::get('testview','ContactController@get')->name('testview');
    Route::post('submit','ContactController@submitform')->name('submit');
    Route::get('admni/add_blog','ContactController@add_blog')->name('admin.add_blog');
    Route::post('saveblog','ContactController@saveblog')->name('saveblog');
    Route::get('blogs','ContactController@blogs')->name('blogs');
});