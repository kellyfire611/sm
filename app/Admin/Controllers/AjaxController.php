<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;
use App\Admin\Controllers\V1\ApiDataController;

class AjaxController extends Controller
{
    use ApiDataController;

    public function generateMaSanPham($tenSanPham = '')
    {
        $maSanPhamGenerated = '';

        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }
}
