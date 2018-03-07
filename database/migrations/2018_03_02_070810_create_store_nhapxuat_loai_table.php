<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreNhapxuatLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_nhapxuat_loai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ma_loai_nhapxuat', 191)->unique();
            $table->string('ten_loai_nhapxuat', 191);
            $table->boolean('la_nhap');
            $table->boolean('la_noibo');
            $table->boolean('la_hoantra');
            
            $table->smallInteger('company_id')->nullable();
            
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
        Schema::dropIfExists('store_nhapxuat_loai');
    }
}
