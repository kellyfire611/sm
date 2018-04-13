<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Auth\Database\Administrator;
use App\Models\StorePhieunhap;
use App\Models\StorePhieuxuat;
use App\Models\StoreSanpham;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Bảng điều khiển');
            $content->description('Tóm tắt tình hình Kho dược trong Hệ thống...');

            $content->body('<h1>Quản lý Kho dược</h1>');
            $content->row(function ($row) {
                $row->column(3, new InfoBox('Tổng số người dùng', 'users', 'aqua', '/admin/auth/users', Administrator::count()));
                $row->column(3, new InfoBox('Tổng số Phiếu Nhập', 'store_phieunhap', 'green', '/admin/store/phieunhap_tondauky', StorePhieunhap::count()));
                $row->column(3, new InfoBox('Tổng số Phiếu Xuất', 'store_phieuxuat', 'yellow', '/admin/store/phieunhap_tondauky', StorePhieuxuat::count()));
                $row->column(3, new InfoBox('Tổng số Sản phẩm', 'store_sanpham', 'red', '/admin/store/sanpham', StoreSanpham::count()));
            });

            $content->body(view('admin.dashboard'));
        });
    }
}
