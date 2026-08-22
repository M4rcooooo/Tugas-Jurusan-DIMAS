@extends('layouts.app')

@section('title', 'Mata Pelajaran - ' . config('app.name', 'Jurusan'))

@section('content')

    {{-- Header Halaman --}}
    <section class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <p class="text-primary-300 font-medium uppercase text-sm tracking-wide mb-2">Kurikulum</p>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Mata Pelajaran</h1>
            <p class="text-gray-300 max-w-2xl leading-relaxed">
                Daftar mata pelajaran yang diajarkan di {{ config('app.name', 'jurusan kami') }}, terbagi
                dalam kelompok mata pelajaran umum dan produktif/kejuruan.
            </p>
        </div>
    </section>

    {{-- Mata Pelajaran Umum --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-10">
                <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Kelompok A</p>
                <h2 class="text-2xl font-bold text-gray-800">Mata Pelajaran Umum</h2>
            </div>
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full text-sm text-left">
                    <thead class="bg-primary-800 text-white">
                        <tr>
                            <th class="px-6 py-3 font-medium">No</th>
                            <th class="px-6 py-3 font-medium">Mata Pelajaran</th>
                            <th class="px-6 py-3 font-medium">Kelas</th>
                            <th class="px-6 py-3 font-medium">Jam / Minggu</th>
                        </tr>
                    </thead> <tbody class="divide-y divide-gray-200 bg-white">
                        @php
                            $umum = [
                                ['mata-pelajaran' => 'Pendidikan Agama', 'kelas' => 'X - XII', 'jam' => 3],
                                ['mata-pelajaran' => 'Pendidikan Pancasila', 'kelas' => 'X - XII', 'jam' => 2],
                                ['mata-pelajaran' => 'Bahasa Indonesia', 'kelas' => 'X - XII', 'jam' => 4],
                                ['mata-pelajaran' => 'Matematika', 'kelas' => 'X - XII', 'jam' => 4],
                                ['mata-pelajaran' => 'Bahasa Inggris', 'kelas' => 'X - XII', 'jam' => 3],
                                ['mata-pelajaran' => 'Pendidikan Jasmani & Kesehatan', 'kelas' => 'X - XII', 'jam' => 2],
                            ];
                        @endphp
                        @foreach ($umum as $i => $item)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-3 text-gray-500">{{ $i + 1 }}</td>
                                <td class="px-6 py-3 text-gray-800 font-medium">{{ $item['mata-pelajaran'] }}</td>
                                <td class="px-6 py-3 text-gray-500">{{ $item['kelas'] }}</td>
                                <td class="px-6 py-3 text-gray-500">{{ $item['jam'] }} JP</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                   
            </div>
        </div>
    </section>

    {{-- Mata Pelajaran Produktif / Kejuruan --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-10">
                <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Kelompok C</p>
                <h2 class="text-2xl font-bold text-gray-800">Mata Pelajaran Produktif / Kejuruan</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $produktif = [
                        ['nama' => 'Pemrograman Dasar', 'deskripsi' => 'Dasar logika dan algoritma pemrograman.'],
                        ['nama' => 'Basis Data', 'deskripsi' => 'Perancangan dan pengelolaan sistem basis data.'],
                        ['nama' => 'Pemrograman Web', 'deskripsi' => 'Pengembangan aplikasi berbasis web.'],
                        ['nama' => 'Jaringan Komputer', 'deskripsi' => 'Konsep dan implementasi jaringan komputer.'],
                        ['nama' => 'Desain Grafis', 'deskripsi' => 'Prinsip dan praktik desain visual digital.'],
                        ['nama' => 'Produk Kreatif & Kewirausahaan', 'deskripsi' => 'Pengembangan produk dan jiwa wirausaha.'],
                    ];
                @endphp
                @foreach ($produktif as $item)
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="w-10 h-10 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center mb-4 font-bold">
                            #
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">{{ $item['nama'] }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">{{ $item['deskripsi'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection