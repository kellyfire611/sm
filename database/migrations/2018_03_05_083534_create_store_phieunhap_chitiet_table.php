<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePhieunhapChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_phieunhap_chitiet', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('ngay_sudungdautien');
            $table->decimal('dongianhap', 16, 4);
            $table->decimal('soluongnhap', 16, 4);
            $table->decimal('soluong_conlai', 16, 4);
            $table->decimal('thue', 16, 4);
            $table->dateTime('hansudung')->nullable();
            $table->text('so_lo')->nullable();
            $table->text('so_chungtu')->nullable();
            
            
            $table->unsignedInteger('nhapxuat_id');
            $table->unsignedInteger('phieunhap_id');
            $table->unsignedInteger('soketoan_id');
            $table->unsignedInteger('kho_id');
            $table->unsignedInteger('sanpham_id');
            $table->unsignedInteger('donvitinh_id');
            $table->foreign('donvitinh_id')->references('id')->on('store_donvitinh');
            $table->foreign('phieunhap_id')->references('id')->on('store_phieunhap');
            $table->foreign('sanpham_id')->references('id')->on('store_sanpham');
            $table->foreign('kho_id')->references('id')->on('store_kho');
            $table->foreign('nhapxuat_id')->references('id')->on('store_nhapxuat');
            $table->foreign('soketoan_id')->references('id')->on('store_soketoan');
            
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
        Schema::dropIfExists('store_phieunhap_chitiet');
    }
}
