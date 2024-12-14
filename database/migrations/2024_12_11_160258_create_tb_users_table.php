<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsersTable extends Migration
{
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id'); // Primary key
            $table->string('user_email', 50)->unique();
            $table->string('user_password', 100);
            $table->string('user_nama', 100);
            $table->text('user_alamat')->nullable();
            $table->string('user_hp', 25)->nullable();
            $table->string('user_pos', 5)->nullable();
            $table->tinyInteger('user_role'); // Role pengguna
            $table->tinyInteger('user_aktif')->default(1); // Default aktif
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
}
