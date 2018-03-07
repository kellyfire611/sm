<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Bảng điều khiển');
            $content->description('Tóm tắt tình hình Kho dược trong Hệ thống...');

            $content->body('<h1>Quản lý Kho dược</h1>');
        });
    }
}
