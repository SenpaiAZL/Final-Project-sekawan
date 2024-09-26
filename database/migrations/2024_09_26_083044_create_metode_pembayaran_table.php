<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->increments('metode_pembayaran_id'); // Primary Key dengan auto increment:)
            $table->string('metode_pembayaran_user_id', 50);
            $table->enum('metode_pembayaran_jenis', ['DANA', 'OVO', 'COD']);
            $table->string('metode_pembayaran_nomor', 50)->nullable();
            $table->timestamps();

            // Foreign key ke users table
            $table->foreign('metode_pembayaran_user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('metode_pembayaran');
    }
}