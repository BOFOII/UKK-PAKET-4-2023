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
        Schema::create('tb_petugas', function (Blueprint $table) {
            $table->id("id_petugas");
            $table->string("nama_lengkap", 25);
            $table->string("username", 25);
            $table->string("password");
            $table->foreignId("id_level")->references("id_level")->on("tb_level");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_petugas');
    }
};
