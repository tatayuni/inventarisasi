<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarisasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aplikasi');
            $table->string('nama_opd');
            $table->string('sifat_aplikasi');
            $table->string('fungsi_aplikasi');
            $table->string('integrasi_aplikasi');
            $table->string('jenis_aplikasi');
            $table->string('frekuensi_penggunaan');
            $table->string('lokasi_server');
            $table->string('domain_aplikasi');
            $table->string('kendala');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarisasi');
    }
}
