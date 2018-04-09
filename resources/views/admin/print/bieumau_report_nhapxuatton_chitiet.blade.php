@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu xuất kho
@endsection

@section('paper-size') A4 landscape @endsection
@section('paper-class') A4 landscape @endsection

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/bieumau.css') }}">
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table class="main" >
            <tr>
              <th colspan="16" class="bold name no-border" >BẢNG TÔNG HỢP CHI TIẾT THUỐC - HÓA CHẤT KHO MIỀN THÁNG 03/2018</th>
            </tr>
            <tr class="bold" >
              <td>STT</td>
              <td>Tên thuốc</td>
              <td>Mã <br>Nguồn</td>
              <td>ĐVT</td>
              <td>Đơn giá</td>
              <td></td>
              <td>HSD</td>
              <td>Tồn<br>đầu kỳ</td>
              <td>Thành tiền<br></td>
              <td>Nhập</td>
              <td>Thành tiền</td>
              <td>Tổng xuất</td>
              <td>Thành tiền</td>
              <td>Tồn<br>cuối kỳ</td>
              <td>Thành tiền</td>
              <td>Ghi chú</td>
            </tr>
            <tr>
              <td></td>
              <td class="bold" >Thuốc MDR</td>
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
              <td></td>
              <td></td>
              <td></td>
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
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>CỘNG</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>0</td>
              <td>1.000.000</td>
              <td></td>
              <td></td>
              <td></td>
              <td>999.999</td>
              <td>0</td>
              <td>888.888</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="bold" >Tổng cộng</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td class="bold" >1.111.111</td>
              <td></td>
              <td></td>
              <td></td>
              <td class="bold" >1.111.111</td>
              <td></td>
              <td class="bold" >1.111.111</td>
              <td></td>
            </tr>
            <tr>
                <td class="no-border" ></td>
                <td class="no-border" >Tiền bằng chữ: </td>
                <td colspan="14" class="bold align-left no-border " > <?php echo decimalToTextVietnamese(1111111); ?> </td>
            </tr>
          </table>
    </article>
</section>
@endsection