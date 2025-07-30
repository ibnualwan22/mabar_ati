<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_induk_santri',
        'nama_lengkap',
        'kelas',
        'asrama',
        'alamat',
        'nomor_telepon_wali',
        'rombongan_id',
        'status_perpulangan',
        'status_pembayaran',
    ];
}