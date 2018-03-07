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
            $table->string('ma_sanpham', 191)->unique();
            $table->string('ten_sanpham', 191);
            $table->mediumText('ten_hoatchat');
            $table->mediumText('nongdo_hamluong');
            $table->string('sokiemsoat');
            
            $table->unsignedInteger('nha_sanxuat_id');
            $table->unsignedInteger('nuoc_sanxuat_id');
            
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
