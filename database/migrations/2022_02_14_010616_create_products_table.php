<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigInteger('id_produk')->autoIncrement();
            $table->text('nama_produk');
            $table->string('slug');
            $table->string('harga_produk', 200);
            $table->longText('deskripsi_produk');
            $table->enum('jenis_produk', ['Rumah Tangga', 'Buku Anak', 'Pre Order', 'Barang Rumah', 'Mainan Anak', 'Ready Supplier', 'Kebutuhan Anak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }
};
