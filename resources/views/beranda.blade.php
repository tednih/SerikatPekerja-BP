@extends('layouts.app')

@section('content')

    <section class="relative h-screen overflow-hidden flex items-center">

        <!-- Slideshow Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center animate-fade1"
                style="background-image: url('{{ asset('images/dokumentasi/IMG_6807.JPG') }}');"></div>

            <div class="absolute inset-0 bg-cover bg-center animate-fade2"
                style="background-image: url('{{ asset('images/dokumentasi/IMG_6886.JPG') }}');"></div>

            <div class="absolute inset-0 bg-cover bg-center animate-fade3"
                style="background-image: url('{{ asset('images/dokumentasi/IMG_6956.JPG') }}');"></div>
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-green-50/80 to-green-100/80 backdrop-blur-xs z-10"></div>

        <!-- Content -->
        <div class="relative z-20 max-w-4xl mx-auto text-center px-6">
            <h1 class="text-5xl font-extrabold text-green-900">Serikat Pekerja BP</h1>

            <p class="text-lg text-green-700 mt-4 max-w-2xl mx-auto">
                Bersatu untuk kesejahteraan dan masa depan pekerja yang lebih baik.
            </p>

            <div class="mt-10">
                <a href="/tentang"
                    class="px-8 py-3 bg-green-900 text-white rounded-lg shadow hover:bg-green-700 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

    </section>

    <style>
        @keyframes fade {

            0%,
            100% {
                opacity: 1;
            }

            33% {
                opacity: 0;
            }

            66% {
                opacity: 0;
            }
        }

        .animate-fade1 {
            animation: fade 12s infinite;
        }

        .animate-fade2 {
            animation: fade 12s infinite;
            animation-delay: 4s;
        }

        .animate-fade3 {
            animation: fade 12s infinite;
            animation-delay: 8s;
        }
    </style>

@endsection