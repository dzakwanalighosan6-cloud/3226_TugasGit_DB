@extends('layouts.app')

@section('content')
    <section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1 space-y-8">
            <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">#1 Event Platform</span>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
            </h1>
            <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
                Dari konser musik hingga workshop teknologi, semua ada di genggamanmu. Pesan aman & cepat dengan Midtrans.
            </p>
            <div class="flex gap-4">
                <a href="#events" class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition-transform">
                    Mulai Jelajah
                </a>
                <a href="#" class="px-8 py-4 border-2 border-slate-200 rounded-2xl font-bold text-lg hover:border-indigo-600 hover:text-indigo-600 transition">
                    Cara Pesan
                </a>
            </div>
        </div>
        <div class="flex-1 relative">
            <div class="absolute -top-10 -left-10 w-64 h-64 bg-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
            <img src="{{ asset('assets/concert.png') }}" alt="Concert" class="rounded-[2rem] shadow-2xl relative z-10 w-full object-cover aspect-[4/5] object-center">
        </div>
    </section>

    <section id="events" class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <h2 class="text-3xl font-extrabold mb-2">Event Terdekat</h2>
                <p class="text-slate-500 font-medium">Jangan sampai ketinggalan acara seru minggu ini!</p>
            </div>
            
            <div class="flex flex-wrap gap-2">
                <a href="/" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-xl text-black transition font-medium">Semua Kategori</a>
                
                @foreach($categories as $cat)
                <a href="/?category={{ $cat->slug }}" class="px-4 py-2 bg-indigo-100 hover:bg-indigo-200 text-indigo-700 rounded-xl shadow-sm transition font-medium">
                    {{ $cat->name }}
                </a>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $event)
            <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden aspect-[3/4]">
                    
                    @php
                        $imagePath = 'https://placehold.co/200x600';
                        $titleLow = strtolower($event->title);
                        
                        if (str_contains($titleLow, 'mobile legend')) {
                            $imagePath = asset('assets/ml.jpg');
                        } elseif (str_contains($titleLow, 'valorant')) {
                            $imagePath = asset('assets/valorant.jpg');
                        } elseif (str_contains($titleLow, 'ui/ux')) {
                            $imagePath = asset('assets/ui ux.jpg');
                        } elseif (str_contains($titleLow, 'amikom fest')) {
                            $imagePath = asset('assets/amikom fest.jpg');
                        } elseif ($event->image) {
                            $imagePath = asset('assets/' . $event->image);
                        }
                    @endphp
                    
                    <img src="{{ $imagePath }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                        {{ $event->category->name }}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">{{ $event->title }}</h3>
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ \Carbon\Carbon::parse($event->date)->format('d-m-Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t mt-4">
                        <span class="text-2xl font-black text-indigo-600">Rp {{ number_format($event->price, 0, ',', '.') }}</span>
                        <a href="{{ url('event/'.$event->id) }}" class="px-5 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center">
                <h3 class="text-xl font-bold text-slate-500">Belum ada event untuk kategori ini.</h3>
            </div>
            @endforelse
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12 border-t border-slate-100 mt-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold mb-2">Partner Resmi Kami</h2>
            <p class="text-slate-500 font-medium">Platform AmikomEventHub didukung oleh berbagai partner hebat.</p>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-10 md:gap-16 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
            @forelse($partners as $partner)
                <div class="flex flex-col items-center justify-center group cursor-pointer transition">
                    @if($partner->logo_url)
                        <img src="{{ asset('storage/' . $partner->logo_url) }}" alt="{{ $partner->name }}" class="h-16 w-auto object-contain group-hover:scale-110 transition duration-300">
                    @else
                        <span class="text-2xl font-black text-slate-400 group-hover:text-indigo-600 group-hover:scale-110 transition duration-300">{{ $partner->name }}</span>
                    @endif
                </div>
            @empty
                <p class="text-slate-400 italic">Belum ada partner yang ditambahkan.</p>
            @endforelse
        </div>
    </section>
@endsection