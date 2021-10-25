<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelumPunyaAplikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belum_punya_aplikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('opd');
            $table->string('email');
            $table->string('wa');
            $table->string('deskripsi');
            $table->string('alur');
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
        Schema::dropIfExists('belum_punya_aplikasi');
    }
}
