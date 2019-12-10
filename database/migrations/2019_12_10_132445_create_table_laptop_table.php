<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('ten');
            $table->string('cpu');
            $table->string('ram');
            $table->string('o_cung');
            $table->string('man_hinh');
            $table->string('card_man_hinh');
            $table->string('am_thanh');
            $table->string('cong_ket_noi');
            $table->string('webcam');
            $table->string('he_dieu_hanh');
            $table->string('pin');
            $table->string('kich_thuoc');
            $table->string('khoi_luong');
            $table->string('bao_hanh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptop');
    }
}
