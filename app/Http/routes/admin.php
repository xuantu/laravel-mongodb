<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/9/16
 * Time: 17:53
 */

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'DashboardController@index')->name('admin.index');

    Route::resource('role', 'RoleController');
});