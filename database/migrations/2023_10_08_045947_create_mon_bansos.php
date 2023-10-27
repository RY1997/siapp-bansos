<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonBansos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_bansos', function (Blueprint $table) {
            $table->id();
            $table->string('kd_pemda');
            $table->string('kd_opd');
            $table->string('nm_opd');
            $table->string('kd_rek');
            $table->text('uji_nm_aktivitas');
            $table->string('jenis_bansos');
            $table->string('uji_bansos_sejenis');
            $table->string('nm_bansos_sejenis');
            $table->decimal('uji_anggaran', 22, 2);
            $table->decimal('uji_realisasi', 22, 2);
            $table->integer('uji_kpm');
            $table->string('satuan_kpm');
            $table->string('uji_juknis');
            $table->string('nm_juknis');
            $table->string('uji_basis_salur');
            $table->string('nm_basis_salur');
            $table->string('uji_monev');
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
        Schema::dropIfExists('mon_bansos');
    }
}
