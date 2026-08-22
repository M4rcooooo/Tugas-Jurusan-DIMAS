@extends('layouts.app')

@section('title', 'Fasilitas Jurusan - ' . config('app.name', 'Jurusan'))

@section('content')

    {{-- Header Halaman --}}
    <section class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <p class="text-primary-300 font-medium uppercase text-sm tracking-wide mb-2">Sarana & Prasarana</p>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Fasilitas</h1>
            <p class="text-gray-300 max-w-2xl leading-relaxed">
                Fasilitas lengkap dan memadai untuk mendukung proses belajar mengajar di
                {{ config('app.name', 'jurusan kami') }}.
            </p>
        </div>
    </section>

    {{-- Daftar Fasilitas --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Apa Saja</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Fasilitas yang Tersedia</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="w-full h-48 bg-primary-100 flex items-center justify-center text-primary-700 text-sm">
                        Foto Fasilitas
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Laboratorium Komputer</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Dilengkapi perangkat komputer terbaru dan koneksi internet stabil untuk
                            mendukung kegiatan praktik siswa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="w-full h-48 bg-primary-100 flex items-center justify-center text-primary-700 text-sm">
                        Foto Fasilitas
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Ruang Kelas</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Ruang kelas nyaman dengan fasilitas proyektor dan pendingin ruangan untuk
                            menunjang kegiatan belajar mengajar.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="w-full h-48 bg-primary-100 flex items-center justify-center text-primary-700 text-sm">
                        Foto Fasilitas
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Perpustakaan</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Menyediakan koleksi buku pelajaran, referensi, dan area baca yang nyaman
                            bagi siswa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="w-full h-48 bg-primary-100 flex items-center justify-center text-primary-700 text-sm">
                        Foto Fasilitas
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Bengkel Praktik</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Sarana praktik lapangan dengan peralatan yang sesuai standar industri
                            untuk melatih keterampilan siswa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="w-full h-48 bg-primary-100 flex items-center justify-center text-primary-700 text-sm">
                        Foto Fasilitas
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Lapangan Olahraga</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Area olahraga yang luas untuk mendukung kegiatan ekstrakurikuler dan
                            pengembangan bakat siswa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                    <div class="w-full h-48 bg-primary-100 flex items-center justify-center text-primary-700 text-sm">
                        Foto Fasilitas
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Kantin</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Menyediakan makanan dan minuman sehat dengan harga terjangkau bagi
                            seluruh warga sekolah.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection