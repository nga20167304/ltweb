<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('ten');
            $table->string('man_hinh');
            $table->string('camera');
            $table->string('ram');
            $table->string('bo_nho_trong');
            $table->string('he_dieu_hanh');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('pin');
            $table->string('kich_thuoc');
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
        Schema::dropIfExists('phone');
    }
}
