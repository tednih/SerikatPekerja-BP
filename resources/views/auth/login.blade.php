@extends('layouts.app')

@section('title', 'Login Anggota')

@section('content')
    <div class="flex items-center justify-center bg-gray-50 px-6">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow">
            <h1 class="text-2xl font-bold text-green-900 text-center">
                Login Anggota
            </h1>

            <form method="POST" action="/login" class="mt-6 space-y-5">
                @csrf

                <div>
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email"
                        class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-green-500 focus:border-green-500" required
                        autofocus>
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password"
                        class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-green-500 focus:border-green-500"
                        required>
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember">
                        Ingat saya
                    </label>
                </div>

                <button class="w-full py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 transition">
                    Masuk
                </button>

                <p class="text-center text-sm mt-4">
                    Belum punya akun?
                    <a href="/register" class="text-green-700 font-semibold">
                        Daftar
                    </a>
                </p>
            </form>
        </div>
    </div>
@endsection