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
    Schema::create('santris', function (Blueprint $table) {
        $table->id(); // Nomor urut santri
        $table->string('nomor_induk_santri')->unique(); // NIS, harus unik tidak boleh ada yang sama
        $table->string('nama_lengkap');
        $table->string('kelas')->nullable(); // Kelas santri, bisa diisi atau tidak
        $table->string('asrama');
        $table->text('alamat');
        $table->string('nomor_telepon_wali');

        // Kolom ini untuk menghubungkan santri dengan rombongannya
        $table->unsignedBigInteger('rombongan_id')->nullable(); // Kolom untuk ID rombongan
        $table->foreign('rombongan_id')->references('id')->on('rombongans')->onDelete('set null'); // Ini kuncinya!

        $table->string('status_perpulangan')->default('Belum Ditentukan'); // Belum Ditentukan, Ikut Rombongan, Pulang Mandiri
        $table->string('status_pembayaran')->default('Belum Bayar'); // Belum Bayar, Menunggu Verifikasi, Lunas
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
