<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianDetailTable extends Migration
{
    public function up()
    {
        Schema::create('pembelian_detail', function (Blueprint $table) {
            $table->increments('pembelian_detail_id'); // Primary Key
            $table->unsignedInteger('pembelian_detail_pembelian_id'); // Foreign Key untuk pembelian table
            $table->unsignedInteger('pembelian_detail_pakaian_id'); // Foreign Key untuk pakaian table
            $table->integer('pembelian_detail_jumlah'); // Jumlah Pakain
            $table->integer('pembelian_detail_total_harga'); // Total harga
            $table->timestamps();

            // Foreign keys
            $table->foreign('pembelian_detail_pembelian_id')->references('pembelian_id')->on('pembelian')->onDelete('cascade');
            $table->foreign('pembelian_detail_pakaian_id')->references('pakaian_id')->on('pakaian')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembelian_detail');
    }
}