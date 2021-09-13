<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('kode_brg');
            $table->string('nama_brg');
            $table->string('merk_brg');
            $table->string('bidang_brg');
            $table->string('lokasi');
            $table->string('tahun_perolehan');
            $table->string('klmpk_alat');
            $table->integer('jumlah_brg');
            $table->string('kondisi');
            $table->string('ket_brg');
            $table->integer('kode_ruang');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
