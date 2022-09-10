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
        Schema::create('settings', function (Blueprint $table) {
            $table->bigInteger('id_setting')->autoIncrement();
            $table->string('service_kurir_agta_sameday')->nullable();
            $table->integer('harga_kurir_agta_sameday')->default(0);
            $table->string('estimasi_kurir_agta_sameday')->nullable();
            $table->string('service_kurir_agta_cargo')->nullable();
            $table->integer('harga_kurir_agta_cargo')->default(0);
            $table->string('estimasi_kurir_agta_cargo')->nullable();
            $table->string('link_shopee')->nullable();
            $table->string('link_tentang_kami')->nullable();
            $table->string('link_whatsapp')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
