@extends('layouts.app')

@section('title', 'Beranda - ' . config('app.name', 'Jurusan'))

@section('content')

    {{-- Hero Section --}}
    <section class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-6">
                       REKAYASA PERANGKAT LUNAK
                    </h1>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8 max-w-xl">
                        Membentuk lulusan yang unggul, kompeten, dan siap bersaing di dunia kerja
                        maupun industri melalui pendidikan berkualitas dan berorientasi masa depan.
                    </p>
                </div>
                <div class="hidden lg:flex justify-center">
                    <div class="w-full h-80 bg-primary-700 rounded-xl flex items-center justify-center text-primary-300 text-sm">
                        {{-- Ganti dengan gambar/ilustrasi jurusan --}}
                        Gambar / Ilustrasi Jurusan
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistik Singkat --}}
    <section class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl font-bold text-primary-800">2010</p>
                    <p class="text-gray-500 text-sm mt-1">Tahun Berdiri</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-primary-800">1.200+</p>
                    <p class="text-gray-500 text-sm mt-1">Alumni</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-primary-800">30+</p>
                    <p class="text-gray-500 text-sm mt-1">guru &amp; Staf</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-primary-800">20+</p>
                    <p class="text-gray-500 text-sm mt-1">Mitra Industri</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Sambutan Ketua Jurusan --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
                <div class="md:col-span-1 flex justify-center">
                   
                </div>
                <div class="md:col-span-2">
                    <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Sambutan</p>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Kata Sambutan Ketua Jurusan</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Selamat datang di laman resmi kami. Jurusan ini berkomitmen mencetak lulusan yang
                        tidak hanya unggul secara akademik, tetapi juga siap menghadapi tantangan dunia kerja
                        yang terus berkembang. Kami mengedepankan kurikulum yang relevan, tenaga pengajar
                        berpengalaman, serta kerja sama erat dengan berbagai mitra industri.
                    </p>
                    <p class="text-gray-700 font-semibold">Azhar Noermansyah</p>
                    <p class="text-gray-500 text-sm">Ketua Jurusan</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Keunggulan Program --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Kenapa Memilih Kami</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Keunggulan Program Studi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-lg border border-gray-200 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center mb-4 font-bold">
                        01
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Kurikulum Terkini</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Kurikulum dirancang mengikuti perkembangan industri dan kebutuhan dunia kerja terbaru.
                    </p>
                </div>
                <div class="p-6 rounded-lg border border-gray-200 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center mb-4 font-bold">
                        02
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">guru Berpengalaman</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Diajar oleh tenaga pengajar profesional dengan pengalaman akademik dan industri.
                    </p>
                </div>
                <div class="p-6 rounded-lg border border-gray-200 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center mb-4 font-bold">
                        03
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Mitra Industri Luas</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Kerja sama dengan berbagai perusahaan untuk peluang magang dan penyaluran kerja.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- # Terbaru --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Berita &amp; Kegiatan Terbaru</h2>
                <a href="{{ url('#') }}" class="text-primary-700 font-medium hover:underline text-sm">
                    Lihat Semua &rarr;
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition">
                        <div class="h-40 bg-primary-100 flex items-center justify-center text-primary-500 text-xs">
                            Gambar Berita
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-gray-400 mb-2">01 Agustus 2026</p>
                            <h3 class="font-semibold text-gray-800 mb-2">Judul Berita Contoh {{ $i }}</h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">
                                Ringkasan singkat mengenai berita atau kegiatan jurusan yang baru saja berlangsung.
                            </p>
                            <a href="{{ url('#') }}" class="text-primary-700 text-sm font-medium hover:underline">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Call To Action --}}
    <section class="bg-primary-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                Tertarik Bergabung Bersama Kami?
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                Temukan lebih banyak informasi mengenai program studi, kurikulum, dan peluang karier
                yang bisa kamu dapatkan di jurusan kami.
            </p>
            <a href="{{ url('/contact') }}"
               class="inline-block bg-primary-600 hover:bg-primary-500 text-white font-medium px-8 py-3 rounded-md transition">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>

@endsection