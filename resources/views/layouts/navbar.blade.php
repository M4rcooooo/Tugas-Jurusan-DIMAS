<nav x-data="{ open: false }" class="bg-primary-900 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            {{-- Logo / Nama Jurusan --}}
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    {{-- Ganti dengan logo asli jika ada --}}
                    <div class="w-9 h-9 rounded-full bg-primary-600 flex items-center justify-center text-white font-bold">
                        J
                    </div>
                    <span class="text-white font-semibold text-lg tracking-wide">
                        {{ config('app.name', 'Nama Jurusan') }}
                    </span>
                </a>
            </div>

            {{-- Menu Desktop --}}
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ url('/') }}"
                   class="px-4 py-2 rounded-md text-sm font-medium {{ request()->is('/') ? 'bg-primary-700 text-white' : 'text-gray-300 hover:bg-primary-700 hover:text-white' }} transition">
                    Beranda
                </a>
                <a href="{{ url('/profile') }}"
                   class="px-4 py-2 rounded-md text-sm font-medium {{ request()->is('/profile*') ? 'bg-primary-700 text-white' : 'text-gray-300 hover:bg-primary-700 hover:text-white' }} transition">
                    Profile
                </a>
                <a href="{{ url('/data-guru') }}"
                   class="px-4 py-2 rounded-md text-sm font-medium {{ request()->is('/data-guru*') ? 'bg-primary-700 text-white' : 'text-gray-300 hover:bg-primary-700 hover:text-white' }} transition">
                    Data Guru
                </a>
                <a href="{{ url('/mata-pelajaran') }}"
                   class="px-4 py-2 rounded-md text-sm font-medium {{ request()->is('/mata-pelajaran*') ? 'bg-primary-700 text-white' : 'text-gray-300 hover:bg-primary-700 hover:text-white' }} transition">
                    Mata pelajaran
                </a>
                <a href="{{ url('/contact') }}"
                   class="px-4 py-2 rounded-md text-sm font-medium {{ request()->is('/contact*') ? 'bg-primary-700 text-white' : 'text-gray-300 hover:bg-primary-700 hover:text-white' }} transition">
                    Kontak
                </a>
            </div>

            {{-- Tombol Hamburger (Mobile) --}}
            <div class="md:hidden flex items-center">
                <button @click="open = !open" type="button"
                        class="text-gray-300 hover:text-white focus:outline-none">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Menu Mobile --}}
    <div x-show="open" x-cloak @click.away="open = false" class="md:hidden bg-primary-800" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:bg-primary-700 hover:text-white">Beranda</a>
            <a href="{{ url('/profil') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:bg-primary-700 hover:text-white">Profil</a>
            <a href="{{ url('/data-guru') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:bg-primary-700 hover:text-white">Data Guru</a>
            <a href="{{ url('/mata-pelajaran') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:bg-primary-700 hover:text-white">Mata Pelajaran</a>
            <a href="{{ url('/contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200 hover:bg-primary-700 hover:text-white">Kontak</a>
        </div>
    </div>
</nav>