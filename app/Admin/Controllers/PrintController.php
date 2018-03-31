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

class PrintController extends Controller
{
    use ApiDataController;

    public function printWithView(Request $request, $view)
    {
        $q = $request->all();
        unset($q['_token']);
        //dd($q);

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
        $result = $this->phieunhapById($query['phieunhap_id']);

        $bag = [
            'meta' => [
                'title' => 'Biểu mẫu phiếu nhập',
            ],
            'data' => json_decode($result)
        ];

        return $bag;
    }

    protected function getDataBieumau_phieuxuat($query)
    {
        $result = $this->phieuxuatById($query['phieuxuat_id']);

        $bag = [
            'meta' => [
                'title' => 'Biểu mẫu phiếu xuất',
            ],
            'data' => json_decode($result)
        ];

        return $bag;
    }
}
