
@extends('layouts.app')

@section('title', 'Data Guru - ' . config('app.name', 'Jurusan'))

@section('content')

    {{-- Header Halaman --}}
    <section class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <p class="text-primary-300 font-medium uppercase text-sm tracking-wide mb-2">Tenaga Pengajar</p>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Data Guru</h1>
            <p class="text-gray-300 max-w-2xl leading-relaxed">
                Daftar guru dan tenaga pengajar yang berdedikasi membimbing siswa/mahasiswa
                di {{ config('app.name', 'jurusan kami') }}.
            </p>
        </div>
    </section>

    {{-- Filter / Pencarian --}}
    <section class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <form action="{{ url('/data-guru') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                <input type="text" name="cari" value="{{ request('cari') }}"
                       placeholder="Cari nama guru..."
                       class="flex-1 rounded-md border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <select name="mapel" class="rounded-md border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <option value="">Semua Mata Pelajaran</option>
                    <option value="matematika">Matematika</option>
                    <option value="bahasa-indonesia">Bahasa Indonesia</option>
                    <option value="bahasa-inggris">Bahasa Inggris</option>
                    <option value="produktif">Mata Pelajaran Produktif</option>
                </select>
                <button type="submit"
                        class="bg-primary-800 hover:bg-primary-700 text-white font-medium px-6 py-2.5 rounded-md transition whitespace-nowrap">
                    Cari
                </button>
            </form>
        </div>
    </section>

    {{-- Grid Data Guru --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                @php
                    $guru = [
                        ['nama' => 'Nama Guru 1', 'mapel' => 'Matematika', 'nip' => '19800101 200501 1 001'],
                        ['nama' => 'Nama Guru 2', 'mapel' => 'Bahasa Indonesia', 'nip' => '19820202 200602 2 002'],
                        ['nama' => 'Nama Guru 3', 'mapel' => 'Bahasa Inggris', 'nip' => '19850303 200703 1 003'],
                        ['nama' => 'Nama Guru 4', 'mapel' => 'Pemrograman Web', 'nip' => '19870404 200804 2 004'],
                        ['nama' => 'Nama Guru 5', 'mapel' => 'Basis Data', 'nip' => '19890505 200905 1 005'],
                        ['nama' => 'Nama Guru 6', 'mapel' => 'Jaringan Komputer', 'nip' => '19910606 201006 2 006'],
                        ['nama' => 'Nama Guru 7', 'mapel' => 'Desain Grafis', 'nip' => '19930707 201107 1 007'],
                        ['nama' => 'Nama Guru 8', 'mapel' => 'Kewirausahaan', 'nip' => '19950808 201208 2 008'],
                    ];
                @endphp

                @foreach ($guru as $item)
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition text-center">
                        <div class="h-44 bg-primary-100 flex items-center justify-center text-primary-500 text-xs">
                            Foto Guru
                        </div>
                        <div class="p-5">
                            <p class="font-semibold text-gray-800">{{ $item['nama'] }}</p>
                            <p class="text-primary-700 text-sm mt-1">{{ $item['mapel'] }}</p>
                            <p class="text-gray-400 text-xs mt-2">NIP. {{ $item['nip'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Pagination Placeholder --}}
            <div class="flex justify-center mt-12">
                <nav class="flex items-center gap-2 text-sm">
                    <a href="#" class="px-3 py-2 rounded-md border border-gray-300 text-gray-500 hover:bg-gray-100">Sebelumnya</a>
                    <a href="#" class="px-3 py-2 rounded-md bg-primary-800 text-white">1</a>
                    <a href="#" class="px-3 py-2 rounded-md border border-gray-300 text-gray-500 hover:bg-gray-100">2</a>
                    <a href="#" class="px-3 py-2 rounded-md border border-gray-300 text-gray-500 hover:bg-gray-100">Selanjutnya</a>
                </nav>
            </div>
        </div>
    </section>

@endsection