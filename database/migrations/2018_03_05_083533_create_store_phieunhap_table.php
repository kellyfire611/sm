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
            $table->string('so_phieunhap', 191)->unique();
            $table->dateTime('ngay_nhapkho');
            $table->dateTime('ngay_laphoadon')->nullable();
            $table->dateTime('ngay_xacnhan')->nullable();
            $table->text('lydo_nhap')->nullable();
            $table->text('nguoi_giaohang')->nullable();
            $table->text('so_chungtu')->nullable();
            
            
            $table->unsignedInteger('phieuxuat_id')->nullable();
            $table->unsignedInteger('nhacungcap_id')->nullable();
            $table->unsignedInteger('chuongtrinh_id')->nullable();
            $table->unsignedInteger('soketoan_id');
            $table->unsignedInteger('nhap_tu_kho_id')->nullable();
            $table->unsignedInteger('nhap_vao_kho_id');
            $table->unsignedInteger('nguoi_lapphieu_id');
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
