<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_aspirasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->constrained('kategori');
            $table->string('alamat');
            $table->string('keterangan');
            $table->string('id_laporan');
            $table->string('foto');
            $table->string('status');
            $table->string('feedback');
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
        Schema::dropIfExists('input_aspirasi');
    }
};
