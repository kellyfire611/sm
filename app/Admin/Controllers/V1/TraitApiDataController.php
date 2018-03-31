<?php

namespace App\Admin\Controllers\V1;
use App\Models\StorePhieunhap;
use App\Models\StorePhieuxuat;
use DB;

trait ApiDataController {

    public function phieunhapById($id)
    {
        $totalResult = 1;
        $totalPages = 1;
        $currentPage = 1;
        //$data = StorePhieunhap::all();
        $data = DB::select("select pn.*
                                , pnct.dongianhap, pnct.soluongnhap
                            from store_phieunhap pn
                                join store_phieunhap_chitiet pnct on pnct.phieunhap_id = pn.id
                            where pn.id = $id");
        $chitiet = DB::select("select *
                            from store_phieunhap_chitiet pnct
                                join store_sanpham sp on pnct.sanpham_id = sp.id
                            where pnct.phieunhap_id = $id");

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
                'result' => $data,
                'detail' => $chitiet));
    }
    
    public function phieuxuatById($id)
    {
        $totalResult = 1;
        $totalPages = 1;
        $currentPage = 1;
        $data = DB::select("select px.*
                                , pxct.dongiaxuat, pxct.soluongxuat
                            from store_phieuxuat px
                                join store_phieuxuat_chitiet pxct on pxct.phieuxuat_id = px.id
                                join store_sanpham sp on pxct.sanpham_id = sp.id
                            where px.id = $id");
        $chitiet = DB::select("select *
                            from store_phieuxuat_chitiet pxct
                                join store_sanpham sp on pxct.sanpham_id = sp.id
                            where pxct.phieuxuat_id = $id");

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
                'result' => $data,
                'detail' => $chitiet));
    }

}