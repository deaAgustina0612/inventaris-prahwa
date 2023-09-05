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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang',50);
            $table->string('kode_peminjam',50);
            $table->string('status');
            $table->timestamps();
            // $table->string('tanggal_pinjam');
            // $table->string('tanggal_kembali');
            // $table->string('kondisi_awal');
            // $table->string('kondisi_akhir');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
