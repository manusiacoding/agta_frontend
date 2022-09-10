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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigInteger('id_transaksi')->autoIncrement();
            $table->bigInteger('id_user');
            $table->BigInteger('id_province');
            $table->BigInteger('id_city');
            $table->BigInteger('id_subdistrict');
            $table->longText('alamat');

            $table->integer('shipping_origin')->nullable();
            $table->string('shipping_originType')->nullable();
            $table->integer('shipping_destination')->nullable();
            $table->string('shipping_destinationType')->nullable();
            $table->integer('shipping_weight')->nullable();
            $table->string('shipping_courier')->nullable();
            $table->string('shipping_courier_name')->nullable();
            $table->string('shipping_service')->nullable();
            $table->string('shipping_description')->nullable();
            $table->integer('shipping_value')->nullable();
            $table->string('shipping_etd')->nullable();
            $table->string('shipping_note')->nullable();
            $table->longText('delivery_status')->nullable();
            $table->string('no_resi')->nullable();

            $table->integer('total_berat')->default(0);
            $table->integer('total_harga')->default(0);
            $table->longText('bukti_transfer')->nullable();
            $table->integer('status')->default(0); // 0 = bukti pembayaran sedang divalidasi, 1 = bukti pembayaran tidak sesuai, 2 = dikirim, 3 = diterima & review, 4 = selesai, 5 = dibatalkan
            $table->tinyInteger('status_rating')->default(0);
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
