<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_phieunhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('so_phieunhap', 191)->unique()->comment('Số phiếu nhập');
            $table->dateTime('ngay_nhapkho')->comment('Ngày nhập kho');
            $table->dateTime('ngay_laphoadon')->nullable()->comment('Ngày lập hóa đơn');
            $table->dateTime('ngay_xacnhan')->nullable()->comment('Ngày xác nhận');
            $table->text('lydo_nhap')->nullable()->comment('Lý do nhập');
            $table->text('nguoi_giaohang')->nullable()->comment('Người giao hàng');
            $table->text('so_chungtu')->nullable()->comment('Số chứng từ');
            
            $table->unsignedInteger('phieuxuat_id')->nullable()->comment('Phiếu xuất');
            $table->unsignedInteger('nhacungcap_id')->nullable()->comment('Nhà cung cấp');
            $table->unsignedInteger('chuongtrinh_id')->nullable()->comment('Chương trình');
            $table->unsignedInteger('soketoan_id')->comment('Sổ kế toán');
            $table->unsignedInteger('nhap_tu_kho_id')->nullable()->comment('Nhập từ kho');
            $table->unsignedInteger('nhap_vao_kho_id')->comment('Nhập vào kho');
            $table->unsignedInteger('nguoi_lapphieu_id')->comment('Người lập phiếu');
            $table->foreign('nhap_tu_kho_id')->references('id')->on('store_kho');
            $table->foreign('nhap_vao_kho_id')->references('id')->on('store_kho');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_phieunhap');
    }
}
