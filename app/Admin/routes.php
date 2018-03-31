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
        'store/kho'                        => StoreKhoController::class,
        'store/loai_kho'                   => StoreKhoLoaiController::class,
        'store/loai_kho_rel'               => StoreKhoLoaiRelController::class,
        'store/soketoan'                   => StoreSoketoanController::class,
        'store/chuongtrinh'                => StoreChuongtrinhController::class,
        'store/donvitinh'                  => StoreDonvitinhController::class,
        'store/nguoncungcap'               => StoreNguoncungcapController::class,
        'store/nhacungcap'                 => StoreNhacungcapController::class,
        'store/nhapxuat'                   => StoreNhapxuatController::class,
        'store/loai_nhapxuat'              => StoreNhapxuatLoaiController::class,
        'store/sanpham'                    => StoreSanphamController::class,
        'store/loai_sanpham'               => StoreSanphamLoaiController::class,
        'store/nhom_sanpham'               => StoreSanphamNhomController::class,
        'store/loai_nhom_sanpham_rel'      => StoreSanphamNhomLoaiRelController::class,

        'store/phieunhap_tondauky'         => StorePhieunhapController::class,
        'store/phieuxuat_quakhole'         => StorePhieuxuatController::class,

        'store/baocao/nhapxuatton_chitiet' => StorePhieunhapController::class,
    ]);

    $router->post('store/print/{view}', 'PrintController@printWithView')->name('store.print');

    /* --- API V1 --- */
    $router->get('api/v1/kho', 'V1\ApiController@kho');
    $router->get('api/v1/loai_kho', 'V1\ApiController@loai_kho');
    $router->get('api/v1/phieunhap/{id}', 'V1\ApiController@phieunhapById');
    /* ./. --- API V1 --- */

    /* --- Test route --- */
    $router->get('store/test', 'TestController@index');
    /* ./. --- Test route --- */
});