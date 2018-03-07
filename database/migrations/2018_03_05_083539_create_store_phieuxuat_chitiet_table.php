<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePhieuxuatChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_phieuxuat_chitiet', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('ngay_sudungdautien');
            $table->decimal('dongiaxuat', 16, 4);
            $table->decimal('soluongxuat', 16, 4);
            $table->decimal('thue', 16, 4);
            $table->dateTime('hansudung')->nullable();
            $table->text('so_lo')->nullable();
            $table->text('so_chungtu')->nullable();
            $table->boolean('cotinhphi');
            
            
            $table->unsignedInteger('nhapxuat_id');
            $table->unsignedInteger('phieuxuat_id');
            $table->unsignedInteger('soketoan_id');
            $table->unsignedInteger('kho_id');
            $table->unsignedInteger('sanpham_id');
            $table->unsignedInteger('donvitinh_id');
            $table->unsignedInteger('phieunhap_chitiet_id');
            $table->foreign('donvitinh_id')->references('id')->on('store_donvitinh');
            $table->foreign('phieuxuat_id')->references('id')->on('store_phieuxuat');
            $table->foreign('sanpham_id')->references('id')->on('store_sanpham');
            $table->foreign('kho_id')->references('id')->on('store_kho');
            $table->foreign('nhapxuat_id')->references('id')->on('store_nhapxuat');
            $table->foreign('phieunhap_chitiet_id')->references('id')->on('store_phieunhap_chitiet');
            
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
        Schema::dropIfExists('store_phieuxuat_chitiet');
    }
}
