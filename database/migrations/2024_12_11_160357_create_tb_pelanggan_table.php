<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPelangganTable extends Migration
{
    public function up()
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id'); // Primary key
            $table->unsignedTinyInteger('pel_id_gol'); // Foreign key ke tb_golongan
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->text('pel_alamat')->nullable();
            $table->string('pel_hp', 20)->nullable();
            $table->string('pel_ktp', 50)->nullable();
            $table->string('pel_seri', 50)->nullable();
            $table->integer('pel_meteran')->nullable();
            $table->enum('pel_aktif', ['Y', 'N'])->default('Y');
            $table->unsignedInteger('pel_id_user')->nullable(); // Foreign key ke tb_users
            $table->timestamps(); // created_at dan updated_at

            // Foreign keys
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onDelete('cascade');
            $table->foreign('pel_id_user')->references('user_id')->on('tb_users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_pelanggan');
    }
}
