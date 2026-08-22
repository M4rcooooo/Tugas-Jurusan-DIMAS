@extends('layouts.app')

@section('title', 'Kontak - ' . config('app.name', 'Jurusan'))

@section('content')

    {{-- Header Halaman --}}
    <section class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <p class="text-primary-300 font-medium uppercase text-sm tracking-wide mb-2">Hubungi Kami</p>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Kontak</h1>
            <p class="text-gray-300 max-w-2xl leading-relaxed">
                Ada pertanyaan seputar program studi, pendaftaran, atau kerja sama? Silakan hubungi kami
                melalui informasi di bawah ini.
            </p>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- Info Kontak --}}
                <div class="lg:col-span-1 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 flex-shrink-0 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center">
                            @
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Email</p>
                            <p class="text-gray-500 text-sm">jurusan@kampus.ac.id</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 flex-shrink-0 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center">
                            T
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Telepon</p>
                            <p class="text-gray-500 text-sm">(022) 123-4567</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 flex-shrink-0 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center">
                            A
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Alamat</p>
                            <p class="text-gray-500 text-sm">Jl. Contoh No. 1, Bandung, Jawa Barat</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 flex-shrink-0 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center">
                            J
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Jam Layanan</p>
                            <p class="text-gray-500 text-sm">Senin - Jumat, 08.00 - 16.00 WIB</p>
                        </div>
                    </div>

                    {{-- Peta --}}
                    <div class="h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 text-sm mt-6">
                        Peta Lokasi (Google Maps)
                    </div>
                </div>

                {{-- Form Pesan --}}
                <div class="lg:col-span-2 bg-gray-50 rounded-lg border border-gray-200 p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>

                    @if (session('success'))
                        <div class="bg-green-50 text-green-700 border border-green-200 rounded-md px-4 py-3 mb-6 text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/kontak') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" required
                                       class="w-full rounded-md border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                       placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full rounded-md border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                       placeholder="nama@email.com">
                            </div>
                        </div>
                        <div>
                            <label for="subjek" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                            <input type="text" id="subjek" name="subjek" required
                                   class="w-full rounded-md border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                   placeholder="Topik pesan Anda">
                        </div>
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="5" required
                                      class="w-full rounded-md border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                      placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit"
                                class="bg-primary-800 hover:bg-primary-700 text-white font-medium px-6 py-3 rounded-md transition">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection