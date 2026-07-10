@extends('main')

@section('title', 'Shop - Floristy Keynyla')

@section('content')

{{-- Breadcrumb --}}
<div class="px-6 pt-4 pb-0 bg-white" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
    <div class="max-w-6xl mx-auto flex items-center gap-2 text-xs text-gray-400 font-light tracking-wide">
        <a href="/" class="hover:text-purple-400 transition">Home</a>
        <span>/</span>
        <span style="color: #ba95fa;">Shop</span>
    </div>
</div>

{{-- Page Header --}}
<section class="pr-6 pb-16 pl-0 pt-6" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">
        <div class="w-full md:w-1/2 flex-shrink-0">
            <img src="{{ asset('assets/image/hero/banner.png') }}" alt="Banner" class="w-full h-80 object-contain object-left">
        </div>
        <div class="w-full md:w-1/2 text-center md:text-left px-6 md:px-0">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Our Collection</p>
            <h1 class="text-5xl font-light italic" style="font-family: 'Cormorant Garamond', serif;">Shop All Bouquets</h1>
        </div>
    </div>
</section>

{{-- Filter Tabs --}}
<section class="bg-white px-6 pb-4 sticky top-0 z-10 border-b border-gray-100 shadow-sm">
    <div class="max-w-6xl mx-auto flex items-center gap-3 overflow-x-auto py-3 scrollbar-hide">
        @foreach(['All', 'Buket Artificial', 'Buket Uang', 'Buket Kawat Bulu'] as $cat)
        <button
            onclick="filterCategory('{{ $cat }}')"
            data-cat="{{ $cat }}"
            class="filter-btn flex-shrink-0 px-5 py-2 text-xs uppercase tracking-widest font-light border rounded-full transition-all duration-200
                {{ $cat === 'All' ? 'text-white border-transparent' : 'text-gray-400 border-gray-200 hover:border-purple-300 hover:text-purple-400' }}"
            style="{{ $cat === 'All' ? 'background-color: #ba95fa;' : '' }}">
            {{ $cat }}
        </button>
        @endforeach
    </div>
</section>

{{-- Product Grid --}}
<section class="bg-white py-14 px-6">
    <div class="max-w-6xl mx-auto">

        <div id="product-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @php
            $products = [
                ['name' => 'Fairy Buket',          'price' => 'Rp 70.000',       'cat' => 'Buket Artificial',  'img' => 'assets/image/katalog/fairybuket.jpg',        'badge' => 'Best Seller'],
                ['name' => 'Azalea Buket',         'price' => 'Rp 20.000',       'cat' => 'Buket Artificial',  'img' => 'assets/image/katalog/azaleabuket.jpg',       'badge' => null, 'note' => 'Request Wrapping Motif +Rp 20.000'],
                ['name' => 'Bunny Buket',          'price' => 'Rp 35.000',       'cat' => 'Buket Kawat Bulu',  'img' => 'assets/image/katalog/bunnybuket.jpg',        'badge' => null],
                ['name' => 'Daisy Tulips',         'price' => 'Rp 55.000',       'cat' => 'Buket Kawat Bulu',  'img' => 'assets/image/katalog/daisytulips.jpg',       'badge' => null],
                ['name' => 'Tulips Buket',         'price' => 'Rp 70.000',       'cat' => 'Buket Kawat Bulu',  'img' => 'assets/image/katalog/tulipsbuket.jpg',       'badge' => null],
                ['name' => 'Artificial Flowers',   'price' => 'Rp 50.000 – 55.000', 'cat' => 'Buket Uang',    'img' => 'assets/image/katalog/artificialflowers.jpg', 'badge' => null],
            ];
            @endphp

            @foreach($products as $p)
            <div class="product-card group cursor-pointer" data-cat="{{ $p['cat'] }}">
                <div class="relative bg-gray-50 overflow-hidden rounded-sm mb-3" style="aspect-ratio: 3/4;">
                    @if($p['img'])
                        <img src="{{ asset($p['img']) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <span class="text-5xl">🌸</span>
                        </div>
                    @endif

                    @if($p['badge'])
                    <span class="absolute top-2 left-2 text-[10px] uppercase tracking-widest px-2 py-1 text-white rounded-full"
                        style="background-color: #ba95fa;">{{ $p['badge'] }}</span>
                    @endif

                    {{-- Hover overlay: Order via WA --}}
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300 flex items-end justify-center pb-4 opacity-0 group-hover:opacity-100">
                        <a href="https://wa.me/6282116379226?text=Halo%20Floristy%20Keynyla%2C%20saya%20ingin%20memesan%20{{ urlencode($p['name']) }}"
                            target="_blank"
                            class="text-[10px] uppercase tracking-widest px-4 py-2 text-white transition"
                            style="background-color: #ba95fa;"
                            onclick="event.stopPropagation()">
                            Order via WA
                        </a>
                    </div>
                </div>

                <h3 class="text-sm font-light italic" style="font-family: 'Cormorant Garamond', serif;">{{ $p['name'] }}</h3>
                <p class="text-xs text-gray-400 mt-0.5">{{ $p['price'] }}</p>
                @if(!empty($p['note']))
                <p class="text-[10px] text-gray-300 mt-0.5 italic">{{ $p['note'] }}</p>
                @endif
                <p class="text-[10px] uppercase tracking-widest text-gray-300 mt-0.5">{{ $p['cat'] }}</p>
            </div>
            @endforeach

        </div>

        {{-- Empty state --}}
        <div id="empty-state" class="hidden text-center py-20 text-gray-300">
            <span class="text-5xl">🌿</span>
            <p class="mt-4 text-sm font-light tracking-wide">No products found in this category.</p>
        </div>

    </div>
</section>

{{-- CTA Banner --}}
<section class="py-16 px-6 text-center border-t border-gray-100" style="background: linear-gradient(to right, #f9f4ff, #fdf0ff);">
    <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Tidak menemukan yang kamu cari?</p>
    <h2 class="text-3xl font-light italic mb-6" style="font-family: 'Cormorant Garamond', serif;">Custom Bouquet, Sesuai Keinginanmu</h2>
    <a href="https://wa.me/6282116379226?text=Halo%20Floristy%20Keynyla%2C%20saya%20ingin%20custom%20bouquet"
        target="_blank"
        class="inline-block px-10 py-3 text-sm uppercase tracking-widest text-white transition hover:opacity-80"
        style="background-color: #ba95fa;">
        Hubungi Kami
    </a>
</section>

<script>
    function filterCategory(cat) {
        const cards = document.querySelectorAll('.product-card');
        const buttons = document.querySelectorAll('.filter-btn');
        const empty = document.getElementById('empty-state');
        let visible = 0;

        cards.forEach(card => {
            const match = cat === 'All' || card.dataset.cat === cat;
            card.style.display = match ? 'block' : 'none';
            if (match) visible++;
        });

        buttons.forEach(btn => {
            const active = btn.dataset.cat === cat;
            btn.style.backgroundColor = active ? '#ba95fa' : '';
            btn.style.color = active ? 'white' : '#9ca3af';
            btn.style.borderColor = active ? 'transparent' : '#e5e7eb';
        });

        empty.classList.toggle('hidden', visible > 0);
    }
</script>

@endsection
