<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelproduct_rating', function (Blueprint $table) {
            $table->bigInteger('id_model_produk_rating')->autoIncrement();
            $table->bigInteger('id_user');
            $table->bigInteger('id_transaksi');
            $table->bigInteger('id_transaksi_detail');
            $table->bigInteger('id_produk');
            $table->bigInteger('id_model_produk');
            $table->integer('rating')->default(0);
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
        Schema::dropIfExists('modelproduct_rating');
    }
};
