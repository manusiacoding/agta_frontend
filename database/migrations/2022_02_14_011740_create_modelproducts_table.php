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
        Schema::create('modelproducts', function (Blueprint $table) {
            $table->bigInteger('id_model')->autoIncrement();
            $table->bigInteger('id_produk');
            $table->text('nama_model');
            $table->string('stok_produk', 100);
            $table->string('ukuran_produk', 100);
            $table->string('berat_produk', 200);
            $table->string('gambar_produk', 1000);
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
        Schema::dropIfExists('modelproducts');
    }
};
