@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu nhập kho
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/bieumau.css') }}">
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table class="tg">
            <tr>
                <th class="tg-baqh">SỞ Y TẾ THÀNH PHỐ CẦN THƠ</th>
                <th class="tg-baqh"></th>
                <th class="tg-baqh">Mẫu số: C20-HD </th>
            </tr>
            <tr>
                <td class="tg-baqh align-center valign-top">BỆNH VIỆN LAO & BỆNH PHÔI</td>
                <td class="bold name">PHIẾU NHẬP KHO </td>
                <td class="tg-s6z2 align-center">Ban hành theo quy định số:
                    <br>19/2006/QĐ-BTC
                    <br>ngày 30/03/2006
                    <br>của Bộ Tài Chính</td>
            </tr>
            <tr>
                <td class="tg-031e"></td>
                <td class="tg-031e align-center">Ngày - tháng - năm</td>
                <td class="tg-031e"></td>
            </tr>
            <tr>
            	<?php ?>
                <td class="tg-031e align-left" colspan="3">Số : {{ $bag['data']->result[0]->so_phieunhap }}  </td>

            </tr>
            <tr>
                <td class="tg-031e align-left" colspan="3">Đơn vị giao :</td>s
            </tr>
            <tr>
                <td class="tg-031e align-left" colspan="3">Lý do nhập : {{ $bag['data']->result[0]->lydo_nhap }}</td>
            </tr>
            <tr>
                <td class="tg-031e align-left" colspan="3">Nhập tại kho :</td>
            </tr>
            <tr>
                <td class="tg-031e align-left" >Nguồn :</td>
                <td class="tg-031e align-left" >Số chứng từ : {{ $bag['data']->result[0]->so_chungtu }}</td>
                <td class="tg-031e align-left" >Ngày :</td>
            </tr>
        </table>
        <table class="main">
            <tr>
                <th class="main-s6z2" >STT</th>
                <th class="main-s6z2" >Tên quy cách vật tư dụng cụ, sản phẩm</th>
                <th class="main-s6z2" >Số lô</th>
                <th class="main-s6z2" >Hạn SD</th>
                <th class="main-s6z2" >Loại TS</th>
                <th class="main-s6z2" >ĐVT</th>

                <th class="main-s6z2" >Số lượng</th>
                <th class="main-s6z2" >Đơn giá

                <th class="main-s6z2" >Thành<br> tiền</th>
                <th class="main-s6z2" >Ghi<br> chú</th>
            </tr>
            <?php
            	foreach ($bag['data']->detail as $detail) {
            		# code...
            	
            ?>
            
            <tr>
                <td></td>
                <td class="align-left" >{{ $detail->ten_sanpham }}</td>
                <td></td>
                <td>{{ $detail->hansudung }}</td>
                <td></td>
                <td></td>
                <td>{{ $detail->soluongnhap }}</td>
                <td>{{ $detail->dongianhap }}</td>
                <td></td>
                <td></td>
                
            </tr>
            <?php 
            	}
            ?>
            <tr class="bold">
                <td></td>
                <td class="bold">Tổng</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="main-yw4l no-border"></td>

                <td class="main-yw4l no-border">Tổng số tiền (bằng chữ): </td>
                <td class="main-yw4l align-left no-border bold" colspan="9">Hai chục trăm ngàn tỷ</td>

            </tr>
            <tr>
                <td class="main-yw4l no-border"></td>

                <td class="main-yw4l no-border">Chứng từ kèm theo: </td>
                <td class="main-yw4l align-left no-border" colspan="9">Chứng từ nè</td>

            </tr>
            <tr>
                <td class="no-border bold" colspan="2">Người lập</td>
                <td class="no-border bold" colspan="2">Người giao hàng</td>
                <td class="no-border bold" colspan="2">Thủ kho</td>
                <td class="no-border bold" colspan="2">Kế toán trưởng</td>
                <td class="no-border bold" colspan="2">Thủ trưởng đơn vị</td>
            </tr>
            <tr style="height: 80px;"></tr>
            <tr>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">{{ $bag['data']->result[0]->nguoi_giaohang }}</td>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">Tên nè</td>
            </tr>

        </table>
    </article>
</section>
@endsection