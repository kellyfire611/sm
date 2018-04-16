

<div>
    <div class="col-sm-12">
        <table class="table table-responsive table-hover no-padding">
            <caption>BẢNG TÔNG HỢP CHI TIẾT THUỐC - HÓA CHẤT KHO MIỀN THÁNG 03/2018</caption>
            <thead>
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
            </thead>
            <tbody>
                <?php
                $stt = 0;
                $sumTonDauKy = 0;
                $sumTongNhap = 0;
                $sumTongXuat = 0;
                $sumTonCuoiKy = 0;
                ?>
                @foreach($bag as $key => $value)
                <?php
                $stt++;
                $ttTonDauKy = $value->dongianhap * $value->tong_soluongnhap;
                $ttTongNhap = 0;
                $ttTongXuat = 0;
                $ttTonCuoiKy = 0;
                ?>
                <tr>
                    <td>{{ $stt }}</td>
                    <td class="bold" >{{ $value->ten_sanpham }}</td>
                    <td></td>
                    <td></td>
                    <td class="dongia align-right">{{ number_format($value->dongianhap, 4) }}</td>
                    <td></td>
                    <td></td>
                    <td class="soluong align-right">{{ number_format($value->tong_soluongnhap, 0) }}</td>
                    <td class="thanhtien align-right">{{ number_format($ttTonDauKy, 0) }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $value->tong_soluongxuat }}</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                $sumTonDauKy += $ttTonDauKy;
                $sumTongNhap += 0;
                $sumTongXuat += 0;
                $sumTonCuoiKy = $sumTonDauKy + $sumTongNhap - $sumTongXuat;
                ?>
                @endforeach
                <tr>
                    <td></td>
                    <td>CỘNG</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td class="thanhtien align-right">{{ number_format($sumTonDauKy, 0) }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="thanhtien align-right">{{ number_format($sumTongXuat, 0) }}</td>
                    <td>0</td>
                    <td class="thanhtien align-right">{{ number_format($sumTonCuoiKy, 0) }}</td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td>CỘNG</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td class="thanhtien align-right">{{ number_format($sumTonDauKy, 0) }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="thanhtien align-right">{{ number_format($sumTongXuat, 0) }}</td>
                    <td>0</td>
                    <td class="thanhtien align-right">{{ number_format($sumTonCuoiKy, 0) }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="no-border" ></td>
                    <td class="no-border" >Tiền bằng chữ: </td>
                    <td colspan="14" class="bold align-left no-border"><?php echo decimalToTextVietnamese($sumTonCuoiKy); ?></td>
                </tr>
            </tfoot>
        </table>        
    </div>
</div>


<h1>Biểu đồ</h1>
<div class="row">
    <div class="col-sm-3">
        @include('admin.reports.nhapxuatton_chitiet.chart_bar')
    </div>

    <div class="col-sm-3">
        <canvas id="myChart2" width="400px" height="400px"></canvas>
    </div>

    <div class="col-sm-3">
        <canvas id="myChart3" width="400px" height="400px"></canvas>
    </div>
</div>