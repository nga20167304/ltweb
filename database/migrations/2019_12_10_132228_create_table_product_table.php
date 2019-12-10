<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('number_image');
            $table->integer('luot_mua');
            $table->integer('so_luong');
            $table->integer('laptop_id');
            $table->integer('tablet_id');
            $table->integer('phone_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
