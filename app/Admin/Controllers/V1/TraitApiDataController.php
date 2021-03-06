<?php

namespace App\Admin\Controllers\V1;
use App\Models\StorePhieunhap;
use App\Models\StorePhieuxuat;
use DB;
use Carbon\Carbon;

trait ApiDataController {

    public function phieunhapById($id)
    {
        $totalResult = 1;
        $totalPages = 1;
        $currentPage = 1;
        //$data = StorePhieunhap::all();
        $data = DB::select("select pn.*
                    from store_phieunhap pn
                        left join store_nhacungcap ncc on pn.nhacungcap_id = ncc.id
                        join store_kho k on pn.nhap_vao_kho_id = k.id
                    where pn.id = $id");
        $chitiet = DB::select("select *
                            from store_phieunhap_chitiet pnct
                                join store_sanpham sp on pnct.sanpham_id = sp.id
                                join store_donvitinh dvt on pnct.donvitinh_id = dvt.id
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
                                join store_kho kxt on px.xuat_tu_kho_id = kxt.id
                                join store_kho kxd on px.xuat_den_kho_id = kxd.id
                            where px.id = $id");
        $chitiet = DB::select("select *
                            from store_phieuxuat_chitiet pxct
                                join store_sanpham sp on pxct.sanpham_id = sp.id
                                join store_donvitinh dvt on pxct.donvitinh_id = dvt.id
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

    public function getDanhSachSanPhamConSoLuong($kho_id, $ngay_xuat_kho)
    {
        $parameter = [
            $kho_id,
            $ngay_xuat_kho
        ];
        $result = DB::select('call usp_store_danhsach_sanpham_consoluong(?,?)', $parameter);
        // $data = [
        //     'results' => []
        // ];

        foreach($result as $key => $value) {
            //dd($value->ma_sanpham);
            //$data[$value->ma_sanpham]['id'] = $value->ma_sanpham;
            //$data[]['text'] = '['.$value->ma_sanpham.'] '.$value->ten_sanpham.' ('.$value->ten_hoatchat.') '.$value->nongdo_hamluong.' '.$value->ten_donvitinh.' '.number_format($value->dongianhap,2).' ('.number_format($value->soluong_conlai, 0).')';
            //$data[]['html'] = '['.$value->ma_sanpham.'] '.$value->ten_sanpham.' ('.$value->ten_hoatchat.') '.$value->nongdo_hamluong.' '.$value->ten_donvitinh.' '.number_format($value->dongianhap,2).' ('.number_format($value->soluong_conlai, 0).')';
            // $data['results'][] = [
            //     'id' => $value->id,
            //     'text' => $value->ma_sanpham
            // ];

            //$data[$value->id] = '['.$value->ma_sanpham.'] '.$value->ten_sanpham.' ('.$value->ten_hoatchat.') '.$value->nongdo_hamluong.' '.$value->ten_donvitinh.' '.number_format($value->dongianhap,2).' ('.number_format($value->soluong_conlai, 0).')';
            $data[$value->id] = $value->ma_sanpham . '|' . $value->ten_sanpham . '|' . $value->ten_hoatchat . '|' . $value->nongdo_hamluong . '|' . $value->ten_donvitinh . '|' . number_format($value->dongianhap,2) . '|' . number_format($value->soluong_conlai, 0)
                . '|' . $value->sokiemsoat . '|' . Carbon::parse($value->hansudung)->format('d-m-Y');

        }

        //dd($data);
        //dd(json_encode($data));
        //dd($result);//->pluck('ten_sanpham', 'id'));
        // return json_encode($data);
        return $data;
    }
}