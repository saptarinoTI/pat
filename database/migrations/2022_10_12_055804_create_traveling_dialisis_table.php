<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('traveling_dialisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id')->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->string('asal_hd', 100)->nullable();
            $table->string('tujuan_hd', 100)->nullable();
            $table->string('diagnosa', 100)->nullable();
            $table->date('pertama')->nullable();
            $table->date('terakhir')->nullable();
            $table->string('frekuensi', 100)->nullable();
            $table->string('mesin', 100)->nullable();
            $table->string('dialiser', 100)->nullable();
            $table->string('dialisat', 100)->nullable();
            $table->string('aliran_dialisat', 100)->nullable();
            $table->string('aliran_darah', 100)->nullable();
            $table->string('lama', 100)->nullable();
            $table->string('ultrafiltrasi', 100)->nullable();
            $table->string('uf_profiling', 100)->nullable();
            $table->string('heparinisasi', 100)->nullable();
            $table->string('akses_faskuler', 100)->nullable();
            $table->string('hbsag', 100)->nullable();
            $table->string('antihcv', 100)->nullable();
            $table->string('antihiv', 100)->nullable();
            $table->date('tglceklab')->nullable();
            $table->string('penyulit_hd', 100)->nullable();
            $table->string('beratbadan_kering', 100)->nullable();
            $table->string('beratbadan_akhir', 100)->nullable();
            $table->string('tekanan_darah', 100)->nullable();
            $table->integer('lab_HB')->nullable();
            $table->integer('lab_ureum')->nullable();
            $table->integer('lab_kreatinin')->nullable();
            $table->integer('lab_natrium')->nullable();
            $table->integer('lab_kalium')->nullable();
            $table->integer('lab_prot')->nullable();
            $table->integer('lab_albumin')->nullable();
            $table->string('obat', 100)->nullable();
            $table->date('tranfusi_terakhir')->nullable();
            $table->string('goldar', 100)->nullable();
            $table->string('reaksi_transfusi', 100)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }
};
