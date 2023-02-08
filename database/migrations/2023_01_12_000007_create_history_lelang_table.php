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
        Schema::create('history_lelang', function (Blueprint $table) {
            $table->uuid("id_history")->primary();

            $table->foreignUuid("id_lelang")->references("id_lelang")->on("tb_lelang");
            $table->foreignUuid("id_barang")->references("id_barang")->on("tb_barang");
            $table->foreignId("id_user")->references("id_user")->on("tb_masyarakat");

            $table->bigInteger("penawaran_harga");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_lelang');
    }
};
