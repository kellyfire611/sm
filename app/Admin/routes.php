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
        '/store/kho'                        => StoreKhoController::class,
        '/store/loai_kho'                   => StoreKhoLoaiController::class,
        '/store/loai_kho_rel'               => StoreKhoLoaiRelController::class,
        '/store/soketoan'                   => StoreSoketoanController::class,
        '/store/chuongtrinh'                => StoreChuongtrinhController::class,
        '/store/donvitinh'                  => StoreDonvitinhController::class,
        '/store/nguoncungcap'               => StoreNguoncungcapController::class,
        '/store/nhacungcap'                 => StoreNhacungcapController::class,
        '/store/nhapxuat'                   => StoreNhapxuatController::class,
        '/store/loai_nhapxuat'              => StoreNhapxuatLoaiController::class,
        '/store/sanpham'                    => StoreSanphamController::class,
        '/store/loai_sanpham'               => StoreSanphamLoaiController::class,
        '/store/nhom_sanpham'               => StoreSanphamNhomController::class,
        '/store/loai_nhom_sanpham_rel'      => StoreSanphamNhomLoaiRelController::class,
    ]);

    $router->get('api/kho', 'ApiController@kho');
    $router->get('api/loai_kho', 'ApiController@loai_kho');

    /* --- Test route --- */
    $router->get('test/bieumau_phieunhap', 'TestController@bieumau_phieunhap');
    $router->get('test/bieumau_phieuxuat', 'TestController@bieumau_phieuxuat');
    /* ./. --- Test route --- */
});
