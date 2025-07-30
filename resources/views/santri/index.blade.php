<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Santri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('santri.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
                     Tambah Santri
                    </a>
                    @if (session('success'))
                    <div class="mb-4 rounded-lg bg-green-100 px-4 py-3 text-green-800">
                    {{ session('success') }}
                    </div>
                        @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="text-left">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">NIS</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Lengkap</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Asrama</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status Pulang</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status Bayar</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @forelse ($santris as $santri)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $santri->nomor_induk_santri }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $santri->nama_lengkap }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $santri->asrama }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $santri->status_perpulangan }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $santri->status_pembayaran }}</td>
                                        <td class="whitespace-nowrap px-4 py-2">
                                            <a href="#" class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="whitespace-nowrap px-4 py-2 text-center text-gray-500">
                                            Tidak ada data santri.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $santris->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>