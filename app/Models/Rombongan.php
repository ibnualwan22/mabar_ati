<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombongan extends Model
{
    use HasFactory;

    // TAMBAHKAN INI
    protected $fillable = [
        'nama_rombongan',
        'destinasi',
        'armada',
        'keterangan_armada',
        'penanggung_jawab_pic',
        'kontak_pic',
        'jadwal_keberangkatan',
        'titik_kumpul',
        'biaya',
        'nomor_rekening_pembayaran',
        'status',
    ];
}