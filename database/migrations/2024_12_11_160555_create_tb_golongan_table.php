<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbGolonganTable extends Migration
{
    public function up()
    {
        Schema::create('tb_golongan', function (Blueprint $table) {
            $table->tinyIncrements('gol_id'); // Primary key, auto-increment
            $table->string('gol_kode', 10);
            $table->string('gol_nama', 50);
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_golongan');
    }
}
