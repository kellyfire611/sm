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
            </tbody>
            <tfoot>
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
                    <td colspan="14" class="bold align-left no-border"><?php echo decimalToTextVietnamese(1111111); ?></td>
                </tr>
            </tfoot>
        </table>        
    </div>
</div>