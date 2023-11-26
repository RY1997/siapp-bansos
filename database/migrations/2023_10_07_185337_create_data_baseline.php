<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBaseline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_baseline', function (Blueprint $table) {
            $table->id();
            $table->string('kd_pwk');
            $table->string('nm_pemda');
            $table->string('no_perda');
            $table->date('tgl_perda')->nullable();
            $table->string('no_perkada_bansos')->nullable();
            $table->date('tgl_perkada_bansos')->nullable();
            $table->text('link')->nullable();
            $table->string('status')->nullable();
            $table->string('uji_petik')->default('Tidak');
            $table->decimal('belanja_daerah', 22, 2);
            $table->decimal('a_belanja_daerah', 22, 2)->default(0);
            $table->decimal('r_belanja_daerah', 22, 2)->default(0);
            $table->decimal('5_1_02_01_01_0039', 22, 2);
            $table->decimal('a_5_1_02_01_01_0039', 22, 2)->default(0);
            $table->decimal('r_5_1_02_01_01_0039', 22, 2)->default(0);
            $table->decimal('5_1_02_02_02', 22, 2);
            $table->decimal('5_1_02_02_02_0001', 22, 2);
            $table->decimal('5_1_02_02_02_0002', 22, 2);
            $table->decimal('5_1_02_02_02_0003', 22, 2);
            $table->decimal('5_1_02_02_02_0004', 22, 2);
            $table->decimal('5_1_02_02_02_0005', 22, 2);
            $table->decimal('5_1_02_02_02_0006', 22, 2);
            $table->decimal('5_1_02_02_02_0007', 22, 2);
            $table->decimal('5_1_02_02_02_0008', 22, 2);
            $table->decimal('5_1_02_02_02_0009', 22, 2);
            $table->decimal('5_3', 22, 2);
            $table->decimal('a_5_3', 22, 2)->default(0);
            $table->decimal('r_5_3', 22, 2)->default(0);
            $table->decimal('5_1_06', 22, 2);
            $table->decimal('a_5_1_06', 22, 2)->default(0);
            $table->decimal('r_5_1_06', 22, 2)->default(0);
            $table->decimal('5_1_06_01', 22, 2);
            $table->decimal('5_1_06_01_01', 22, 2);
            $table->decimal('5_1_06_01_01_0001', 22, 2);
            $table->decimal('5_1_06_01_02', 22, 2);
            $table->decimal('5_1_06_01_02_0001', 22, 2);
            $table->decimal('5_1_06_02', 22, 2);
            $table->decimal('5_1_06_02_01', 22, 2);
            $table->decimal('5_1_06_02_01_0001', 22, 2);
            $table->decimal('5_1_06_02_02', 22, 2);
            $table->decimal('5_1_06_02_02_0001', 22, 2);
            $table->decimal('5_1_06_03', 22, 2);
            $table->decimal('5_1_06_03_01', 22, 2);
            $table->decimal('5_1_06_03_01_0001', 22, 2);
            $table->decimal('5_1_06_03_02', 22, 2);
            $table->decimal('5_1_06_03_02_0001', 22, 2);
            $table->decimal('5_1_06_04', 22, 2);
            $table->decimal('5_1_06_04_01', 22, 2);
            $table->decimal('5_1_06_04_01_0001', 22, 2);
            $table->decimal('5_1_06_04_02', 22, 2);
            $table->decimal('5_1_06_04_02_0001', 22, 2);
            $table->decimal('5_1_06_urusan', 22, 2);
            $table->decimal('1', 22, 2);
            $table->decimal('1_01', 22, 2);
            $table->decimal('1_01_5_1_06', 22, 2);
            $table->decimal('1_02', 22, 2);
            $table->decimal('1_02_5_1_06', 22, 2);
            $table->decimal('1_03', 22, 2);
            $table->decimal('1_03_5_1_06', 22, 2);
            $table->decimal('1_04', 22, 2);
            $table->decimal('1_04_5_1_06', 22, 2);
            $table->decimal('1_05', 22, 2);
            $table->decimal('1_05_5_1_06', 22, 2);
            $table->decimal('1_06', 22, 2);
            $table->decimal('1_06_5_1_06', 22, 2);
            $table->decimal('2', 22, 2);
            $table->decimal('2_07', 22, 2);
            $table->decimal('2_07_5_1_06', 22, 2);
            $table->decimal('2_08', 22, 2);
            $table->decimal('2_08_5_1_06', 22, 2);
            $table->decimal('2_09', 22, 2);
            $table->decimal('2_09_5_1_06', 22, 2);
            $table->decimal('2_10', 22, 2);
            $table->decimal('2_10_5_1_06', 22, 2);
            $table->decimal('2_11', 22, 2);
            $table->decimal('2_11_5_1_06', 22, 2);
            $table->decimal('2_12', 22, 2);
            $table->decimal('2_12_5_1_06', 22, 2);
            $table->decimal('2_13', 22, 2);
            $table->decimal('2_13_5_1_06', 22, 2);
            $table->decimal('2_14', 22, 2);
            $table->decimal('2_14_5_1_06', 22, 2);
            $table->decimal('2_15', 22, 2);
            $table->decimal('2_15_5_1_06', 22, 2);
            $table->decimal('2_16', 22, 2);
            $table->decimal('2_16_5_1_06', 22, 2);
            $table->decimal('2_17', 22, 2);
            $table->decimal('2_17_5_1_06', 22, 2);
            $table->decimal('2_18', 22, 2);
            $table->decimal('2_18_5_1_06', 22, 2);
            $table->decimal('2_19', 22, 2);
            $table->decimal('2_19_5_1_06', 22, 2);
            $table->decimal('2_20', 22, 2);
            $table->decimal('2_20_5_1_06', 22, 2);
            $table->decimal('2_21', 22, 2);
            $table->decimal('2_21_5_1_06', 22, 2);
            $table->decimal('2_22', 22, 2);
            $table->decimal('2_22_5_1_06', 22, 2);
            $table->decimal('2_23', 22, 2);
            $table->decimal('2_23_5_1_06', 22, 2);
            $table->decimal('2_24', 22, 2);
            $table->decimal('2_24_5_1_06', 22, 2);
            $table->decimal('3', 22, 2);
            $table->decimal('3_25', 22, 2);
            $table->decimal('3_25_5_1_06', 22, 2);
            $table->decimal('3_26', 22, 2);
            $table->decimal('3_26_5_1_06', 22, 2);
            $table->decimal('3_27', 22, 2);
            $table->decimal('3_27_5_1_06', 22, 2);
            $table->decimal('3_28', 22, 2);
            $table->decimal('3_28_5_1_06', 22, 2);
            $table->decimal('3_29', 22, 2);
            $table->decimal('3_29_5_1_06', 22, 2);
            $table->decimal('3_30', 22, 2);
            $table->decimal('3_30_5_1_06', 22, 2);
            $table->decimal('3_31', 22, 2);
            $table->decimal('3_31_5_1_06', 22, 2);
            $table->decimal('3_32', 22, 2);
            $table->decimal('3_32_5_1_06', 22, 2);
            $table->decimal('4', 22, 2);
            $table->decimal('4_01', 22, 2);
            $table->decimal('4_01_5_1_06', 22, 2);
            $table->decimal('4_02', 22, 2);
            $table->decimal('4_02_5_1_06', 22, 2);
            $table->decimal('5', 22, 2);
            $table->decimal('5_01', 22, 2);
            $table->decimal('5_01_5_1_06', 22, 2);
            $table->decimal('5_02', 22, 2);
            $table->decimal('5_02_5_1_06', 22, 2);
            $table->decimal('5_03', 22, 2);
            $table->decimal('5_03_5_1_06', 22, 2);
            $table->decimal('5_04', 22, 2);
            $table->decimal('5_04_5_1_06', 22, 2);
            $table->decimal('5_05', 22, 2);
            $table->decimal('5_05_5_1_06', 22, 2);
            $table->decimal('5_06', 22, 2);
            $table->decimal('5_06_5_1_06', 22, 2);
            $table->decimal('5_07', 22, 2);
            $table->decimal('5_07_5_1_06', 22, 2);
            $table->decimal('6', 22, 2);
            $table->decimal('6_01', 22, 2);
            $table->decimal('6_01_5_1_06', 22, 2);
            $table->decimal('7', 22, 2);
            $table->decimal('7_01', 22, 2);
            $table->decimal('7_01_5_1_06', 22, 2);
            $table->decimal('8', 22, 2);
            $table->decimal('8_01', 22, 2);
            $table->decimal('8_01_5_1_06', 22, 2);
            $table->decimal('9', 22, 2)->nullable();
            $table->decimal('9_01', 22, 2)->nullable();
            $table->decimal('9_01_5_1_06', 22, 2)->nullable();
            $table->decimal('9_02', 22, 2)->nullable();
            $table->decimal('9_02_5_1_06', 22, 2)->nullable();
            $table->decimal('9_03', 22, 2)->nullable();
            $table->decimal('9_03_5_1_06', 22, 2)->nullable();
            $table->decimal('9_04', 22, 2)->nullable();
            $table->decimal('9_04_5_1_06', 22, 2)->nullable();
            $table->decimal('9_05', 22, 2)->nullable();
            $table->decimal('9_05_5_1_06', 22, 2)->nullable();
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
        Schema::dropIfExists('data_baseline');
    }
}