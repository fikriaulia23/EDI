<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('nm_institusi')->nullable();
            $table->string('jurusan')->nullable();
            $table->integer('th_lulus')->nullable();
            $table->string('ipk')->nullable();
            $table->string('nik');
            $table->string('email');
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
        Schema::dropIfExists('data_pendidikan');
    }
}
