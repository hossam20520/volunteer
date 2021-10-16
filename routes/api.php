<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Registered
    Route::apiResource('registereds', 'RegisteredApiController');

    // Others
    Route::apiResource('others', 'OthersApiController');
});


Route::post('firstAid', 'anaController@firstAid');
Route::get('link', 'anaController@api');

Route::post('frorm/contact', 'ContactController@contact');