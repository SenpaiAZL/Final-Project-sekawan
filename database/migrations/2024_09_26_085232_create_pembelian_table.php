<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('pembelian_id'); // Primary Key
            $table->string('pembelian_user_id', 50); // Foreign Key untuk users table
            $table->unsignedInteger('pembelian_metode_pembayaran_id'); // Foreign Key untuk metode_pembayaran table
            $table->timestamp('pembelian_tanggal'); // Tanggal Beli
            $table->integer('pembelian_total_harga'); // Total Harga
            $table->timestamps();

            //Foreign keys
            $table->foreign('pembelian_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('pembelian_metode_pembayaran_id')->references('metode_pembayaran_id')->on('metode_pembayaran')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}