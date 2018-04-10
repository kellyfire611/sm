@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu xuất kho
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
                <td class="tg-baqh align-center valign-top">BỆNH VIỆN LAO &amp; BỆNH PHÔI</td>
                <td class="bold name">PHIẾU XUẤT KHO </td>
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
                <td class="tg-031e align-left" colspan="3">Số :</td>

            </tr>
            <tr>
                <td class="tg-031e align-left" colspan="3">Họ tên người nhận hàng :</td>s
            </tr>
            <tr>
                <td class="tg-031e align-left" colspan="3">Lý do xuất kho :</td>
            </tr>
        </table>
        <table class="main">
            <tr>
                <th class="main-s6z2" rowspan="2">STT</th>
                <th class="main-s6z2" rowspan="2">Tên quy cách vật tư
                    <br>dụng cụ, sản phẩm</th>
                <th class="main-s6z2" rowspan="2">Số lô</th>
                <th class="main-s6z2" rowspan="2">Hạn SD</th>
                <th class="main-s6z2" rowspan="2">Loại TS</th>
                <th class="main-s6z2" rowspan="2">ĐVT</th>

                <th class="main-s6z2" colspan="2">Số lượng nhận</th>
                <th class="main-s6z2" rowspan="2">Đơn giá

                    <th class="main-s6z2" rowspan="2">Thành
                        <br> tiền</th>
                    <th class="main-s6z2" rowspan="2">Ghi
                        <br> chú</th>
            </tr>
            <tr>
                <th style="text-align:  center;" class="main-yw4l">Yêu cầu</td>
                    <th style="text-align:  center;" class="main-yw4l">Thực xuất</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
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
                <td class="no-border bold" colspan="2">Người nhận hàng</td>
                <td class="no-border bold" colspan="2">Thủ kho</td>
                <td class="no-border bold" colspan="2">Kế toán trưởng</td>
                <td class="no-border bold" colspan="2">Thủ trưởng đơn vị</td>
            </tr>
            <tr style="height: 80px;"></tr>
            <tr>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">Tên nè</td>
                <td class="no-border" colspan="2">Tên nè</td>
            </tr>

        </table>
    </article>
</section>
@endsection