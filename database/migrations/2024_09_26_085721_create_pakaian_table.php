<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePakaianTable extends Migration
{
    public function up()
    {
        Schema::create('pakaian', function (Blueprint $table) {
            $table->increments('pakaian_id'); // Primary Key
            $table->unsignedInteger('pakaian_kategori_pakaian_id'); // Foreign Key untuk kategori_pakaian table
            $table->string('pakaian_nama', 50); // Nama Pakain
            $table->string('pakaian_harga', 50); // Harga Pakain
            $table->string('pakaian_stok', 100); // Stock pakain
            $table->string('pakaian_gambar_url', 50); // Image URL untuk pakain
            $table->timestamps();

            //Foreign key
            $table->foreign('pakaian_kategori_pakaian_id')->references('kategori_pakaian_id')->on('kategori_pakaian')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pakaian');
    }
}