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
    Schema::table('rombongans', function (Blueprint $table) {
        $table->string('destinasi')->after('nama_rombongan'); // Contoh: "Magelang, Temanggung, ..."
        $table->string('armada')->after('destinasi'); // Contoh: "Ratu Samudro"
        $table->text('keterangan_armada')->nullable()->after('armada'); // Contoh: "1 Bigbus"
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('rombongans', function (Blueprint $table) {
        $table->dropColumn(['destinasi', 'armada', 'keterangan_armada']);
    });
}
};
