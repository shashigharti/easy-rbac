<?php

Route::group(['prefix' => config('laravel-rbac.rbac.admin'), 'as' => 'admin.','group' => 'Roles'], function () {
    Route::resource('permissions',  '\Robustit\EasyRBAC\Controllers\PermissionController');
});
