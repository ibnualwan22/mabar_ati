<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Rombongan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Tombol Tambah Rombongan --}}
                    <a href="{{ route('rombongan.create') }}" class="inline-flex ...">
                    Tambah Rombongan
                    </a>
                    {{-- TAMBAHKAN BLOK IF INI --}}
                    @if (session('success'))
                   <div class="mb-4 rounded-lg bg-green-100 px-4 py-3 text-green-800">
                    {{ session('success') }}
                  </div>
                    @endif

                    {{-- Tabel Data Rombongan --}}
<div class="overflow-x-auto">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="text-left">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Rombongan</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Destinasi</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Ketua Rombongan (PIC)</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Biaya</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @forelse ($rombongans as $rombongan)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $rombongan->nama_rombongan }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $rombongan->destinasi }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $rombongan->penanggung_jawab_pic }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Rp {{ number_format($rombongan->biaya, 0, ',', '.') }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $rombongan->status }}</td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <a href="#" class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700">
                            Detail
                        </a>
                        <a href="{{ route('rombongan.edit', $rombongan) }}" class="inline-block rounded bg-indigo-600 ...">
                        Edit
                        </a>
                       {{-- Tombol Edit (ini sudah ada) --}}
<a href="{{ route('rombongan.edit', $rombongan) }}" class="...">
    Edit
</a>

{{-- GANTI TOMBOL HAPUS DENGAN FORM INI --}}
<form action="{{ route('rombongan.destroy', $rombongan) }}" method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button type="submit"
            class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700"
            onclick="return confirm('Apakah Anda yakin ingin menghapus rombongan ini?')">
        Hapus
    </button>
</form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="whitespace-nowrap px-4 py-2 text-center text-gray-500">
                        Tidak ada data rombongan.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

                    {{-- Link Paginasi --}}
                    <div class="mt-4">
                        {{ $rombongans->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>