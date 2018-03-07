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
            $table->string('so_phieuxuat', 191)->unique();
            $table->unsignedInteger('soketoan_id');
            $table->unsignedInteger('xuat_tu_kho_id')->nullable();
            $table->unsignedInteger('xuat_den_kho_id');
            $table->unsignedInteger('nguoi_lapphieu_id');
            $table->dateTime('ngay_xuatkho');
            $table->dateTime('ngay_xacnhan')->nullable();
            $table->text('lydo_xuat')->nullable();
            $table->unsignedInteger('nhacungcap_id')->nullable();
            $table->unsignedInteger('chuongtrinh_id')->nullable();
            $table->text('nguoi_nhanhang')->nullable();
            $table->text('so_chungtu')->nullable();

            
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
