@extends('layouts.app')

@section('title', 'Profil Jurusan - ' . config('app.name', 'Jurusan'))

@section('content')

    {{-- Header Halaman --}}
    <section class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <p class="text-primary-300 font-medium uppercase text-sm tracking-wide mb-2">Tentang Kami</p>
            <h1 class="text-3xl sm:text-4xl font-bold mb-4">Profil Jurusan</h1>
            <p class="text-gray-300 max-w-2xl leading-relaxed">
                Mengenal lebih dekat sejarah, visi, misi, tujuan, serta struktur organisasi
                {{ config('app.name', 'jurusan kami') }}.
            </p>
        </div>
    </section>

    {{-- Sejarah --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="md:col-span-1">
                    <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Sejarah</p>
                    <h2 class="text-2xl font-bold text-gray-800">Perjalanan Kami</h2>
                </div>
                <div class="md:col-span-2 text-gray-600 leading-relaxed space-y-4">
                    <p>
                        {{ config('app.name', 'Jurusan ini') }} didirikan dengan tujuan mencetak sumber daya
                        manusia yang unggul dan siap menghadapi tantangan dunia kerja maupun industri. Sejak
                        awal berdiri, program studi ini terus berkembang mengikuti kebutuhan zaman, baik dari
                        sisi kurikulum, fasilitas, maupun kualitas tenaga pengajar.
                    </p>
                    <p>
                        Hingga saat ini, kami telah menghasilkan ribuan lulusan yang tersebar di berbagai
                        instansi, perusahaan, dan bidang wirausaha, serta terus menjalin kerja sama dengan
                        berbagai mitra industri untuk meningkatkan kualitas pendidikan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi & Misi --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="w-12 h-12 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center mb-4 font-bold">
                        V
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Visi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Menjadi program studi unggul yang menghasilkan lulusan kompeten, berdaya saing
                        tinggi, dan berkontribusi positif bagi masyarakat serta dunia industri.
                    </p>
                </div>
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="w-12 h-12 bg-primary-100 text-primary-700 rounded-md flex items-center justify-center mb-4 font-bold">
                        M
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Misi</h3>
                    <ul class="text-gray-600 leading-relaxed space-y-2 list-disc list-inside">
                        <li>Menyelenggarakan pendidikan berkualitas sesuai perkembangan ilmu dan teknologi.</li>
                        <li>Mengembangkan penelitian yang bermanfaat bagi masyarakat dan industri.</li>
                        <li>Membangun kerja sama dengan mitra industri dan instansi terkait.</li>
                        <li>Membentuk lulusan yang berintegritas dan siap bersaing secara global.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Tujuan --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Tujuan</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Tujuan Program Studi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-lg border border-gray-200 text-center hover:shadow-md transition">
                    <div class="w-10 h-10 mx-auto bg-primary-100 text-primary-700 rounded-full flex items-center justify-center mb-4 font-bold">
                        1
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Menghasilkan lulusan yang kompeten di bidangnya.
                    </p>
                </div>
                <div class="p-6 rounded-lg border border-gray-200 text-center hover:shadow-md transition">
                    <div class="w-10 h-10 mx-auto bg-primary-100 text-primary-700 rounded-full flex items-center justify-center mb-4 font-bold">
                        2
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Menumbuhkan sikap profesional dan etika kerja yang baik.
                    </p>
                </div>
                <div class="p-6 rounded-lg border border-gray-200 text-center hover:shadow-md transition">
                    <div class="w-10 h-10 mx-auto bg-primary-100 text-primary-700 rounded-full flex items-center justify-center mb-4 font-bold">
                        3
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Mendorong inovasi melalui penelitian dan pengabdian masyarakat.
                    </p>
                </div>
                <div class="p-6 rounded-lg border border-gray-200 text-center hover:shadow-md transition">
                    <div class="w-10 h-10 mx-auto bg-primary-100 text-primary-700 rounded-full flex items-center justify-center mb-4 font-bold">
                        4
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Membangun jejaring kerja sama dengan industri dan alumni.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Struktur Organisasi --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <p class="text-primary-700 font-medium uppercase text-sm tracking-wide mb-2">Struktur</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Struktur Organisasi</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg border border-gray-200 p-6 text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-primary-200 flex items-center justify-center text-primary-700 text-xs mb-4">
                        Foto
                    </div>
                    <p class="font-semibold text-gray-800">Nama Ketua Jurusan</p>
                    <p class="text-gray-500 text-sm">Ketua Jurusan</p>
                </div>
                <div class="bg-white rounded-lg border border-gray-200 p-6 text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-primary-200 flex items-center justify-center text-primary-700 text-xs mb-4">
                        Foto
                    </div>
                    <p class="font-semibold text-gray-800">Nama Sekretaris Jurusan</p>
                    <p class="text-gray-500 text-sm">Sekretaris Jurusan</p>
                </div>
                <div class="bg-white rounded-lg border border-gray-200 p-6 text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-primary-200 flex items-center justify-center text-primary-700 text-xs mb-4">
                        Foto
                    </div>
                    <p class="font-semibold text-gray-800">Nama Koordinator Prodi</p>
                    <p class="text-gray-500 text-sm">Koordinator Program Studi</p>
                </div>
            </div>
        </div>
    </section>

@endsection