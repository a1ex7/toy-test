<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('vouchers_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('vouchers_id')->references('id')->on('vouchers');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_vouchers', function (Blueprint $table) {
            Schema::dropIfExists('products_vouchers');
        });
    }
}
