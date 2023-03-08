<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('posisi_target')->nullable();
            $table->string('nama')->nullable();
            $table->bigInteger('no_ktp')->nullable();
            $table->string('t_tgl_lahir')->nullable();
            $table->string('j_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('goldar')->nullable();
            $table->string('status')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_tgl')->nullable();
            $table->string('email')->nullable();
            $table->integer('no_tlp')->nullable();
            $table->string('org_trdekat')->nullable(false);
            $table->string('skill')->nullable();
            $table->string('penempatan')->nullable();
            $table->bigInteger('salary_target')->nullable();
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
        Schema::dropIfExists('biodata');
    }
}
