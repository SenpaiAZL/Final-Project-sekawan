<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id', 50)->primary();
            $table->string('user_username', 50);
            $table->string('user_password', 50);
            $table->string('user_fullname', 100);
            $table->string('user_email', 50);
            $table->char('user_nohp', 13);
            $table->string('user_alamat', 200);
            $table->string('user_profil_url', 255)->default('url_placeholder_profil');
            $table->enum('user_level', ['Admin', 'pengguna']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}