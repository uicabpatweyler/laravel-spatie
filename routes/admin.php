<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::catch(function () {
    throw new NotFoundHttpException;
});

Route::get('/', 'DashboardController@index')->name('admin_dashboard');
Route::resource('/roles','RoleController');
