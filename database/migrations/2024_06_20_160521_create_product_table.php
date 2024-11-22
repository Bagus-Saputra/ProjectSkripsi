<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('nama_batik');
            $table->string('jenis_batik');
            $table->string('warna');
            $table->string('bahan');
            $table->string('kualitas');
            $table->int('harga', 25); // format untuk harga, dengan maksimal 10 digit dan 2 digit desimal
            $table->string('gambar'); // kolom untuk menyimpan path atau URL gambar
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
