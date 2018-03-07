<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ma_sanpham', 191)->unique()->comment('Mã sản phẩm');
            $table->string('ten_sanpham', 191)->comment('Tên sản phẩm');
            $table->mediumText('ten_hoatchat')->comment('Tên hoạt chất');
            $table->mediumText('nongdo_hamluong')->comment('Nồng độ hàm lượng');
            $table->string('sokiemsoat')->comment('Số kiểm soát');
            
            $table->unsignedInteger('nha_sanxuat_id')->comment('Nhà sản xuất');
            $table->unsignedInteger('nuoc_sanxuat_id')->comment('Nước sản xuất');
            
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
        Schema::dropIfExists('store_sanpham');
    }
}
