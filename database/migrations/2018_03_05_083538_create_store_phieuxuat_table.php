<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePhieuxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_phieuxuat', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('so_phieuxuat', 191)->unique()->comment('Số phiếu xuất');
            $table->unsignedInteger('soketoan_id')->comment('Sổ kế toán');
            $table->unsignedInteger('xuat_tu_kho_id')->nullable()->comment('Xuất từ kho');
            $table->unsignedInteger('xuat_den_kho_id')->comment('Xuất đến kho');
            $table->unsignedInteger('nguoi_lapphieu_id')->comment('Người lập phiếu');
            $table->dateTime('ngay_xuatkho')->comment('Ngày xuất kho');
            $table->dateTime('ngay_xacnhan')->nullable()->comment('Ngày xác nhận');
            $table->text('lydo_xuat')->nullable()->comment('Lý do xuất');
            $table->unsignedInteger('nhacungcap_id')->nullable()->comment('Nhà cung cấp');
            $table->unsignedInteger('chuongtrinh_id')->nullable()->comment('Chương trình');
            $table->text('nguoi_nhanhang')->nullable()->comment('Người nhận hàng');
            $table->text('so_chungtu')->nullable()->comment('Số chứng từ');

            $table->foreign('xuat_tu_kho_id')->references('id')->on('store_kho');
            $table->foreign('xuat_den_kho_id')->references('id')->on('store_kho');
            
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
        Schema::dropIfExists('store_phieuxuat');
    }
}
