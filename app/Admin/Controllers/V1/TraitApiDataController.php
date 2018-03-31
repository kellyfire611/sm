<?php

namespace App\Admin\Controllers\V1;
use App\Models\StorePhieunhap;
use DB;

trait ApiDataController {

    public function phieunhapById($id)
    {
        $totalResult = 1;
        $totalPages = 1;
        $currentPage = 1;
        $data = StorePhieunhap::all();

        // return response()->json(
        //     array('totalResult' => $totalResult, 
        //         'totalPages' => $totalPages, 
        //         'currentPage' => $currentPage, 
        //         'result' => $data)
        //     , 200);
        return json_encode(
            array('totalResult' => $totalResult, 
                'totalPages' => $totalPages, 
                'currentPage' => $currentPage, 
                'result' => $data));
    }

}