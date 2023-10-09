<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRekening extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rekening', function (Blueprint $table) {
            $table->id();
            $table->string('kd_column');
            $table->string('kd_rek');
            $table->string('level');
            $table->string('akun');
            $table->string('kelompok');
            $table->string('jenis');
            $table->string('obyek');
            $table->string('rincian_obyek');
            $table->string('subrincian_obyek');
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
        Schema::dropIfExists('data_rekening');
    }
}
