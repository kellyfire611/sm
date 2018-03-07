<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resources([
        '/store/kho'                => StoreKhoController::class,
        '/store/loai_kho'           => StoreKhoLoaiController::class,
        '/store/loai_kho_rel'       => StoreKhoLoaiRelController::class,
    ]);

    $router->get('api/kho', 'ApiController@kho');
    $router->get('api/loai_kho', 'ApiController@loai_kho');
});
