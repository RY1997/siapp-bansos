<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPemda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemda', function (Blueprint $table) {
            $table->id();
            $table->string('kd_pwk');
            $table->string('nm_pwk');
            $table->string('nm_prov');
            $table->string('nm_pemda');
            $table->string('kd_map');
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
        Schema::dropIfExists('data_pemda');
    }
}
