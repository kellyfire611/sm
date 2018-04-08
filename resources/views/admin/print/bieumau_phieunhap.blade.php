@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu nhập kho
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('content')
<section class="sheet padding-10mm">
	<style type="text/css">
        table {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: normal;
            padding: 15px 0;
            width: 100%;
            vertical-align: middle;
            text-align: center;
        }
        
        .main {
            border-collapse: collapse;
            border-spacing: 0;
        }
        
        .main td {
            padding: 10px 5px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: black;
        }
        
        .main th {
            padding: 10px 5px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: black;
        }
        
        .main .main-s6z2 {
            text-align: center
        }
        
        .main .main-uys7 {
            border-color: inherit;
            text-align: center
        }
        
        .align-left {
            text-align: left;
        }
        
        .align-right {
            text-align: right;
        }
        
        .valign-top {
            vertical-align: top;
        }
        
        .valign-bottom {
            vertical-align: bottom;
        }
        
        .bold {
            font-weight: bold;
        }
        
        .name {
            text-align: center;
            font-size: 20px;
        }
        
        .no-border {
            border-style: none !important;
        }
        
        .main .main-yw4l {
            vertical-align: top
        }
        
        .tittle {
            width: 100%;
        }
        
        .tittle .tieungu {
            padding: 20px 0;
        }
        
        table .nguoithamgia tr {
            padding: 10px 0;
        }
    </style>
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
            	<?php?>
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
    </article>
</section>
@endsection