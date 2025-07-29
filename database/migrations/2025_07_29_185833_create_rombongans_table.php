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
    Schema::create('rombongans', function (Blueprint $table) {
        $table->id(); // Kolom nomor urut otomatis (1, 2, 3, ...)
        $table->string('nama_rombongan'); // Contoh: "Rombongan Surabaya Raya"
        $table->string('penanggung_jawab_pic'); // Nama PIC
        $table->string('kontak_pic'); // Nomor WA PIC
        $table->dateTime('jadwal_keberangkatan'); // Waktu detail kapan berangkat
        $table->string('titik_kumpul'); // Contoh: "Lapangan Utama Pesantren"
        $table->integer('biaya'); // Biaya dalam bentuk angka, misal: 300000
        $table->string('nomor_rekening_pembayaran'); // No. Rekening untuk transfer
        $table->string('status')->default('Buka'); // Status: Buka, Penuh, Ditutup
        $table->timestamps(); // Kolom created_at dan updated_at otomatis
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rombongans');
    }
};
