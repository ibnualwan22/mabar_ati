<?php

namespace App\Http\Controllers;

use App\Models\Santri; // <-- Tambahkan ini
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::latest()->paginate(10);
        return view('santri.index', compact('santris'));
    }
    public function create()
    {
        return view('santri.create');
    }

    // METHOD UNTUK MENYIMPAN DATA
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'nomor_induk_santri' => 'required|string|unique:santris|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'kelas' => 'nullable|string|max:255', // Boleh kosong
            'asrama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_telepon_wali' => 'required|string|max:20',
        ]);

        // 2. Simpan data ke database
        Santri::create($request->all());

        // 3. Redirect dengan pesan sukses
        return redirect()->route('santri.index')->with('success', 'Data santri baru berhasil ditambahkan.');
    }
}
