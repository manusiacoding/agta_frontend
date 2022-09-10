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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id_user')->autoIncrement();
            $table->bigInteger('id_role')->default(2);
            $table->string('name', 100);
            $table->string('username', 100);
            $table->string('email', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 100);

            $table->BigInteger('id_province')->nullable();
            $table->BigInteger('id_city')->nullable();
            $table->BigInteger('id_subdistrict')->nullable();
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
