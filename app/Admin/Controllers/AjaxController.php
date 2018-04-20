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

    public function generateMaSanPham(Request $request)
    {
        // if(empty($tenSanPham))
        // {
        //     return null;
        // }
        $inputs = $request->all();
        $prefix = substr($inputs['tenSanPham'], 0, 3);
        $num = 1;
        $maSanPhamGenerated = $prefix . $num;
        return response()->json(array('msg'=> $maSanPhamGenerated), 200);
    }
}
