<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/9/16
 * Time: 17:53
 */

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['web']], function () {

    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::resource('roles', 'RolesController');
    Route::resource('users', 'UsersController');

});
