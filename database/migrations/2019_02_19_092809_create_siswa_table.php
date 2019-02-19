<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_m_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ucode_siswa', 25);
            $table->string('nama_siswa', 100);
            $table->string('ucode_kelas', 25);
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
        Schema::dropIfExists('tb_m_siswa');
    }
}
