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
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->bigInteger('id_transaksi_detail')->autoIncrement();
            $table->bigInteger('id_transaksi')->nullable();
            $table->bigInteger('id_user');
            $table->bigInteger('id_produk');
            $table->bigInteger('id_model_produk');
            // $table->string('nama_produk');
            $table->string('nama_model');
            $table->string('ukuran_produk');
            $table->integer('berat_produk')->default(0);
            $table->integer('total_berat_produk')->default(0);
            $table->longText('gambar_produk');
            $table->integer('harga_produk')->default(0);
            $table->integer('jumlah_produk')->default(0);
            $table->integer('total_harga')->default(0);
            $table->tinyInteger('status_rating')->default(0);
            $table->tinyInteger('bintang_rating')->default(0);
            $table->text('deskripsi_rating')->nullable();
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
        Schema::dropIfExists('transaction_detail');
    }
};
