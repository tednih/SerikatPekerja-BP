@extends('layouts.app')

@section('title', 'Laporan Keuangan')

@section('content')
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">

            <div class="bg-white rounded-xl shadow p-8">
                <h1 class="text-3xl font-bold text-green-900">
                    Selamat Datang, {{ $user->name }}
                </h1>

                <p class="mt-2 text-gray-600">
                    Anda terdaftar sebagai anggota Serikat Pekerja BP.
                </p>

                <div class="grid md:grid-cols-3 gap-6 mt-10">
                    <div class="p-6 border rounded-lg">
                        <h3 class="font-semibold text-green-800">Status Keanggotaan</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            Aktif
                        </p>
                    </div>

                    <div class="p-6 border rounded-lg">
                        <h3 class="font-semibold text-green-800">Nomor Anggota</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $user->member_number ?? '-' }}
                        </p>
                    </div>

                    <div class="p-6 border rounded-lg">
                        <h3 class="font-semibold text-green-800">Bergabung Sejak</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $user->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="/dokumen" class="px-5 py-2 bg-green-900 text-white rounded-lg hover:bg-green-800">
                        Dokumen Anggota
                    </a>

                    <a href="/agenda" class="px-5 py-2 border border-green-900 text-green-900 rounded-lg hover:bg-green-50">
                        Agenda Kegiatan
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection