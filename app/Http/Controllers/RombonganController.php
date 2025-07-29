<?php

namespace App\Http\Controllers;

use App\Models\Rombongan; // <-- TAMBAHKAN INI
use Illuminate\Http\Request;

class RombonganController extends Controller
{
    public function index()
    {
        // 1. Ambil semua data dari model Rombongan
        $rombongans = Rombongan::latest()->paginate(10);

        // 2. Kirim data tersebut ke view
        return view('rombongan.index', compact('rombongans'));
    }
    public function create()
{
    return view('rombongan.create');
}
public function store(Request $request)
{
    // 1. Validasi data
    $request->validate([
        'nama_rombongan' => 'required|string|max:255',
        'destinasi' => 'required|string|max:255',
        'armada' => 'required|string|max:255',
        'keterangan_armada' => 'nullable|string',
        'penanggung_jawab_pic' => 'required|string|max:255',
        'kontak_pic' => 'required|string|max:20',
        'jadwal_keberangkatan' => 'required|date',
        'titik_kumpul' => 'required|string|max:255',
        'biaya' => 'required|integer',
        'nomor_rekening_pembayaran' => 'required|string|max:255',
    ]);

    // 2. Simpan data ke database
    Rombongan::create($request->all());

    // 3. Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('rombongan.index')->with('success', 'Rombongan baru berhasil ditambahkan.');
}
public function edit(Rombongan $rombongan)
{
    return view('rombongan.edit', compact('rombongan'));
}
public function update(Request $request, Rombongan $rombongan)
{
    // 1. Validasi data (sama seperti di method store)
    $request->validate([
        'nama_rombongan' => 'required|string|max:255',
        'destinasi' => 'required|string|max:255',
        'armada' => 'required|string|max:255',
        'keterangan_armada' => 'nullable|string',
        'penanggung_jawab_pic' => 'required|string|max:255',
        'kontak_pic' => 'required|string|max:20',
        'jadwal_keberangkatan' => 'required|date',
        'titik_kumpul' => 'required|string|max:255',
        'biaya' => 'required|integer',
        'nomor_rekening_pembayaran' => 'required|string|max:255',
    ]);

    // 2. Update data di database
    $rombongan->update($request->all());

    // 3. Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('rombongan.index')->with('success', 'Data rombongan berhasil diperbarui.');
}
public function destroy(Rombongan $rombongan)
{
    // 1. Hapus data dari database
    $rombongan->delete();

    // 2. Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('rombongan.index')->with('success', 'Data rombongan berhasil dihapus.');
}
}