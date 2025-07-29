<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Rombongan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('rombongan.update', $rombongan) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="nama_rombongan" :value="__('Nama Rombongan')" />
                            <x-text-input id="nama_rombongan" class="block mt-1 w-full" type="text" name="nama_rombongan" :value="old('nama_rombongan', $rombongan->nama_rombongan)" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="destinasi" :value="__('Destinasi')" />
                            <x-text-input id="destinasi" class="block mt-1 w-full" type="text" name="destinasi" :value="old('destinasi', $rombongan->destinasi)" required />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="armada" :value="__('Armada')" />
                            <x-text-input id="armada" class="block mt-1 w-full" type="text" name="armada" :value="old('armada', $rombongan->armada)" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="keterangan_armada" :value="__('Keterangan Armada')" />
                            <textarea id="keterangan_armada" name="keterangan_armada" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('keterangan_armada', $rombongan->keterangan_armada) }}</textarea>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="penanggung_jawab_pic" :value="__('Ketua Rombongan (PIC)')" />
                            <x-text-input id="penanggung_jawab_pic" class="block mt-1 w-full" type="text" name="penanggung_jawab_pic" :value="old('penanggung_jawab_pic', $rombongan->penanggung_jawab_pic)" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kontak_pic" :value="__('Kontak PIC (WhatsApp)')" />
                            <x-text-input id="kontak_pic" class="block mt-1 w-full" type="text" name="kontak_pic" :value="old('kontak_pic', $rombongan->kontak_pic)" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="jadwal_keberangkatan" :value="__('Jadwal Keberangkatan')" />
                            <x-text-input id="jadwal_keberangkatan" class="block mt-1 w-full" type="datetime-local" name="jadwal_keberangkatan" :value="old('jadwal_keberangkatan', $rombongan->jadwal_keberangkatan)" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="titik_kumpul" :value="__('Titik Kumpul')" />
                            <x-text-input id="titik_kumpul" class="block mt-1 w-full" type="text" name="titik_kumpul" :value="old('titik_kumpul', $rombongan->titik_kumpul)" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="biaya" :value="__('Biaya (hanya angka)')" />
                            <x-text-input id="biaya" class="block mt-1 w-full" type="number" name="biaya" :value="old('biaya', $rombongan->biaya)" required />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="nomor_rekening_pembayaran" :value="__('Nomor Rekening Pembayaran')" />
                            <x-text-input id="nomor_rekening_pembayaran" class="block mt-1 w-full" type="text" name="nomor_rekening_pembayaran" :value="old('nomor_rekening_pembayaran', $rombongan->nomor_rekening_pembayaran)" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>