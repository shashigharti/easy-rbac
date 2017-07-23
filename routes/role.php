<?php

Route::group(['prefix' => config('easy-rbac.rbac.admin'), 'as' => 'admin.', 'group' => 'Roles'], function () {
    Route::resource('roles',  '\Robustit\EasyRBAC\Controllers\RoleController');
});