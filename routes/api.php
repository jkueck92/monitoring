<?php

Route::group(['middleware' => ['auth:api'], 'prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
   Route::resource('customers', 'CustomerController', ['only' => ['index', 'show']]);
   Route::resource('products', 'ProductController', ['only' => ['index', 'show']]);
   Route::resource('logs', 'LogController', ['only' => ['index', 'show', 'store']]);
});
