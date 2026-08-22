<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profil Jurusan')</title>

    {{-- Tailwind CSS via CDN (tanpa Vite) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50:  '#f5f6f7',
                            100: '#e1e3e6',
                            200: '#c3c7cc',
                            300: '#9ba1a9',
                            400: '#6b7280',
                            500: '#4b5563',
                            600: '#374151',
                            700: '#2d3340',
                            800: '#1f2430',
                            900: '#151922',
                        }
                    }
                }
            }
        }
    </script>

    {{-- Alpine.js via CDN untuk interaktivitas navbar (dropdown/mobile menu) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Konten Utama --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-primary-800 text-gray-300 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-white font-semibold text-lg mb-3">{{ config('app.name', 'Jurusan') }}</h3>
                    <p class="text-sm leading-relaxed">
                        Membentuk lulusan yang unggul, kompeten, dan siap bersaing di dunia kerja maupun industri.
                    </p>
                </div>
                <div>
                    <h3 class="text-white font-semibold text-lg mb-3">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="{{ url('/profile') }}" class="hover:text-white transition">Profile</a></li>
                        <li><a href="{{ url('/data-guru') }}" class="hover:text-white transition">data-guru</a></li>
                        <li><a href="{{ url('/mapel') }}" class="hover:text-white transition">Mapel</a></li>
                        <li><a href="{{ url('/contact') }}" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold text-lg mb-3">Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Email: jurusan@kampus.ac.id</li>
                        <li>Telepon: (022) 123-4567</li>
                        <li>Alamat: Jl. Contoh No. 1, Bandung</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-primary-600 mt-6 pt-6 text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} {{ config('app.name', 'Jurusan') }}. All rights reserved.
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>