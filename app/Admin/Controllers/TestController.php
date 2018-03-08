<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class TestController extends Controller
{
    public function bieumau_phieunhap()
    {
        return view('admin.test.bieumau_phieunhap');
    }

    public function bieumau_phieuxuat()
    {
        return view('admin.test.bieumau_phieuxuat');
    }
}
