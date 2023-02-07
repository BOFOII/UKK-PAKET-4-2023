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
        Schema::create('tb_lelang', function (Blueprint $table) {
            $table->uuid("id_lelang")->unique();

            $table->foreignUuid("id_barang")->references("id_barang")->on("tb_barang");

            $table->date("tgl_lelang");
            $table->bigInteger("harga_akhir");

            $table->foreignId("id_user")->references("id_user")->on("tb_masyarakat");
            $table->foreignId("id_petugas")->references("id_petugas")->on("tb_petugas");

            $table->enum("status", ["dibuka", "ditutup"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lelang');
    }
};
