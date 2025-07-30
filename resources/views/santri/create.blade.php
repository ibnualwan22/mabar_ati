<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Santri Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('santri.store') }}">
                        @csrf

                        <div>
                            <x-input-label for="nomor_induk_santri" :value="__('Nomor Induk Santri (NIS)')" />
                            <x-text-input id="nomor_induk_santri" class="block mt-1 w-full" type="text" name="nomor_induk_santri" :value="old('nomor_induk_santri')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nama_lengkap" :value="__('Nama Lengkap')" />
                            <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="kelas" :value="__('Kelas (Opsional)')" />
                            <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="old('kelas')" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="asrama" :value="__('Asrama')" />
                            <x-text-input id="asrama" class="block mt-1 w-full" type="text" name="asrama" :value="old('asrama')" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('Alamat')" />
                            <textarea id="alamat" name="alamat" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('alamat') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nomor_telepon_wali" :value="__('Nomor Telepon Wali')" />
                            <x-text-input id="nomor_telepon_wali" class="block mt-1 w-full" type="text" name="nomor_telepon_wali" :value="old('nomor_telepon_wali')" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>