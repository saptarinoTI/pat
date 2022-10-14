<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->unsignedBigInteger('user_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama', 70);
            $table->string('tempatlahir', 70);
            $table->date('tgllahir');
            $table->enum('jkelamin', ['laki-laki', 'perempuan']);
            $table->text('alamat');
            $table->string('telpon', 15);
            $table->string('hari', 100);
            $table->string('shift', 10);
            $table->text('keterangan');
            $table->timestamps();
        });
    }
};
