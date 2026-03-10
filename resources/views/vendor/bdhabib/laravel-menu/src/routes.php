<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Bdhabib\LaravelMenu\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcategorymenu', array('as' => 'baddcategorymenu', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@addcategorypostmenu'));
    Route::post($path . '/addpostmenu', array('as' => 'baddpostmenu', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@addcategorypostmenu'));
    Route::post($path . '/addcustommenu', array('as' => 'baddcustommenu', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('as' => 'bdeleteitemmenu', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('as' => 'bdeletemenug', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnewmenu', array('as' => 'bcreatenewmenu', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@createnewmenu'));
    Route::post($path . '/generatemenucontrol', array('as' => 'bgeneratemenucontrol', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('as' => 'bupdateitem', 'uses' => '\Bdhabib\LaravelMenu\Controllers\MenuController@updateitem'));
});
