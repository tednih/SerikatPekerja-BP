@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-12">
        <h1 class="text-2xl font-bold text-green-900 mb-6">
            Perjanjian Kerja Bersama (PKB)
        </h1>

        <div class="bg-white border border-green-200 rounded-xl p-6 shadow-sm">
            <p class="text-green-700 mb-4">
                Dokumen resmi Perjanjian Kerja Bersama Serikat Pekerja BP.
            </p>

            <a href="{{ asset('storage/pkb/pkb-spbp.pdf') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 transition"
                download>
                Download PKB
            </a>
        </div>
    </div>
@endsection