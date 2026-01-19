@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <div class="flex items-center justify-center bg-gray-50 px-6">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow">
            <h1 class="text-2xl font-bold text-green-900 text-center">
                Pendaftaran Anggota
            </h1>

            <form method="POST" action="/register" class="mt-6 space-y-5">
                @csrf

                <div>
                    <label class="text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full mt-1 px-4 py-2 border rounded-lg">
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" required class="w-full mt-1 px-4 py-2 border rounded-lg">
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required class="w-full mt-1 px-4 py-2 border rounded-lg">
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full mt-1 px-4 py-2 border rounded-lg">
                </div>

                <button class="w-full py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 transition">
                    Daftar
                </button>

                <p class="text-center text-sm mt-4">
                    Sudah punya akun?
                    <a href="/login" class="text-green-700 font-semibold">
                        Login
                    </a>
                </p>
            </form>
        </div>
    </div>
@endsection