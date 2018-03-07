<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Models\StoreKho;
use App\Models\StoreKhoLoai;
use DB;

class ApiController extends Controller
{
    public function kho(Request $request)
    {
        $q = $request->get('q');

        return StoreKho::where('ten_kho', 'like', "%$q%")->paginate(null, [DB::raw('ID as id'),DB::raw('ten_kho as text')]);
    }

    public function loai_kho(Request $request)
    {
        $q = $request->get('q');

        return StoreKhoLoai::where('ten_loai_kho', 'like', "%$q%")->paginate(null, [DB::raw('ID as id'),DB::raw('ten_loai_kho as text')]);
    }
}
