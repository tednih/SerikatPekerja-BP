@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-6 py-12">
        <h1 class="text-2xl font-bold text-green-900 mb-6">
            Form Pengaduan Anggota
        </h1>

        <div class="bg-white border border-green-200 rounded-xl p-6 shadow-sm">
            <form method="POST" action="/anggota/pengaduan">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium text-green-800 mb-1">
                        Judul Pengaduan
                    </label>
                    <input type="text" name="judul"
                        class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-green-200"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-green-800 mb-1">
                        Isi Pengaduan
                    </label>
                    <textarea name="isi" rows="5"
                        class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-green-200"
                        required></textarea>
                </div>

                <button type="submit" class="px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 transition">
                    Kirim Pengaduan
                </button>
            </form>
        </div>
    </div>
@endsection