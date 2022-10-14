<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dialisis_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id')->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->date('tanggal')->nullable();
            $table->integer('hd')->nullable();
            $table->string('hf', 15)->nullable();
            $table->float('pre_beratbadan')->nullable();
            $table->float('post_beratbadan')->nullable();
            $table->string('pre_tdarah', 7)->nullable();
            $table->string('post_tdarah', 7)->nullable();
            $table->float('pre_bun')->nullable();
            $table->float('post_bun')->nullable();
            $table->timestamps();
        });
    }
};
