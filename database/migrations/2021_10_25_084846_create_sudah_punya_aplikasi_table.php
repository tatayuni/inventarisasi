<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSudahPunyaAplikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sudah_punya_aplikasi', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('nama_pengelola');
            $table->string('nama_opd');
            $table->string('email_pengelola');
            $table->string('wa_pengelola');
            $table->string('subdomain');
            $table->string('php');
            $table->string('versi_db');
            $table->string('bahasa_pemrograman');
            $table->string('status');
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
        Schema::dropIfExists('sudah_punya_aplikasi');
    }
}
