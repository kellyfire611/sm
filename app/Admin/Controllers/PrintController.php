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

class PrintController extends Controller
{
    public function printWithView(Request $request, $view)
    {
        $q = $request->all();
        unset($q['_token']);

        $data = $this->getData($view, $q);
        //dd($data);
        return view('admin.print.' . $view)->with('data', $data);
    }

    protected function getData($view, $query)
    {
        $method = 'getData'.ucfirst($view);
        if (!method_exists($this, $method)) {
            return [];
        }
        return call_user_func([$this, $method], $query);
    }

    protected function getDataBieumau_phieunhap($query)
    {
        $data = [
            'title' => 'Biểu mẫu phiếu nhập',
            ''
        ];

        return $data;
    }

    protected function getDataBieumau_phieuxuat($query)
    {
        $data = [
            'title' => 'Biểu mẫu phiếu xuất',
            ''
        ];

        return $data;
    }
}
