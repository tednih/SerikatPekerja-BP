@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-12">
        <h1 class="text-2xl font-bold text-green-900 mb-6">
            Laporan Keuangan
        </h1>

        <div class="bg-white border border-green-200 rounded-xl shadow-sm overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-green-50 text-green-800">
                    <tr>
                        <th class="px-4 py-3 text-left">Periode</th>
                        <th class="px-4 py-3 text-left">Keterangan</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="px-4 py-3">2024</td>
                        <td class="px-4 py-3">Laporan Keuangan Tahunan</td>
                        <td class="px-4 py-3 text-center">
                            <a href="{{ asset('storage/keuangan/laporan-2024.pdf') }}"
                                class="text-green-700 hover:underline" download>
                                Download
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">2023</td>
                        <td class="px-4 py-3">Laporan Keuangan Tahunan</td>
                        <td class="px-4 py-3 text-center">
                            <a href="{{ asset('storage/keuangan/laporan-2023.pdf') }}"
                                class="text-green-700 hover:underline" download>
                                Download
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection