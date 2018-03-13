<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Bảng điều khiển');
            $content->description('Tóm tắt tình hình Kho dược trong Hệ thống...');

            $content->body('<h1>Quản lý Kho dược</h1>');
            $content->row(function ($row) {
                $row->column(3, new InfoBox('New Users', 'users', 'aqua', '/demo/users', '1024'));
                $row->column(3, new InfoBox('New Orders', 'shopping-cart', 'green', '/demo/orders', '150%'));
                $row->column(3, new InfoBox('Articles', 'book', 'yellow', '/demo/articles', '2786'));
                $row->column(3, new InfoBox('Documents', 'file', 'red', '/demo/files', '698726'));
            });
        });
    }
}
