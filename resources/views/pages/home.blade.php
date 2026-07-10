@extends('main')

@section('title', 'Floristy - Flower Boutique')

@section('content')

{{-- Hero Section --}}
<section id="hero" class="relative min-h-[90vh] flex items-center justify-center text-center px-6 overflow-hidden">

    <div id="hero-bg" class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000" style="background-image: url('{{ asset('assets/image/hero/hero1.png') }}');"></div>
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative z-10">
        <p class="text-xs uppercase tracking-[0.4em] text-white/80 mb-4">Handcrafted with Love</p>
        <h1 class="text-6xl md:text-8xl font-light italic mb-6 text-white" style="font-family: 'Cormorant Garamond', serif;">
            Beautiful Blooms
        </h1>
        <p class="text-white/80 font-light tracking-wide max-w-md mx-auto mb-8">
            Discover our curated collection of fresh flower bouquets for every occasion.
        </p>
        <a href="/shop" class="inline-block px-10 py-3 text-sm uppercase tracking-widest text-white transition hover:opacity-80" style="background-color: #ba95fa;">
            Shop Now
        </a>
    </div>

    <script>
        const heroBg = document.getElementById('hero-bg');
        const images = [
            "{{ asset('assets/image/hero/hero1.png') }}",
            "{{ asset('assets/image/hero/hero2.png') }}"
        ];
        let current = 0;
        setInterval(() => {
            current = (current + 1) % images.length;
            heroBg.style.opacity = '0';
            setTimeout(() => {
                heroBg.style.backgroundImage = `url('${images[current]}')`;
                heroBg.style.opacity = '1';
            }, 500);
        }, 3000);
    </script>
</section>

{{-- Featured Section --}}
<section class="bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-2">Our Collection</p>
        <h2 class="text-4xl font-light italic mb-12" style="font-family: 'Cormorant Garamond', serif;">Featured Bouquets</h2>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @php
            $featured = [
                ['name' => 'Fairy Buket',        'price' => 'Rp 70.000',  'cat' => 'Buket Artificial', 'img' => 'assets/image/katalog/fairybuket.jpg',  'badge' => 'Best Seller'],
                ['name' => 'Bunny Buket',        'price' => 'Rp 35.000',  'cat' => 'Buket Kawat Bulu', 'img' => 'assets/image/katalog/bunnybuket.jpg',  'badge' => null],
                ['name' => 'Tulips Buket',       'price' => 'Rp 70.000',  'cat' => 'Buket Kawat Bulu', 'img' => 'assets/image/katalog/tulipsbuket.jpg', 'badge' => null],
            ];
            @endphp

            @foreach($featured as $p)
            <div class="product-card group cursor-pointer text-left">
                <div class="relative bg-gray-50 overflow-hidden rounded-sm mb-3" style="aspect-ratio: 3/4;">
                    <img src="{{ asset($p['img']) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                    @if($p['badge'])
                    <span class="absolute top-2 left-2 text-[10px] uppercase tracking-widest px-2 py-1 text-white rounded-full" style="background-color: #ba95fa;">{{ $p['badge'] }}</span>
                    @endif

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
                <p class="text-[10px] uppercase tracking-widest text-gray-300 mt-0.5">{{ $p['cat'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-12">
            <a href="/shop" class="inline-block border text-sm uppercase tracking-widest px-10 py-3 transition" style="border-color: #ba95fa; color: #ba95fa;" onmouseover="this.style.backgroundColor='#ba95fa'; this.style.color='white'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ba95fa'">
                View All Products
            </a>
        </div>
    </div>
</section>

{{-- Testimoni Section --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-14">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-2">What They Say</p>
            <h2 class="text-4xl font-light italic" style="font-family: 'Cormorant Garamond', serif;">Happy Customers</h2>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-12">

            {{-- Kiri: Foto --}}
            <div class="w-full md:w-1/2 flex flex-col items-center gap-3">
                <div class="overflow-hidden rounded-sm shadow-md w-full h-96 bg-gray-50 flex items-center justify-center">
                    <img id="testi-foto" src="{{ asset('assets/image/testimoni/testimoni1.jpg') }}" class="w-full h-full object-contain transition-opacity duration-500">
                </div>
                <button onclick="openLightbox()" class="flex items-center gap-2 text-xs uppercase tracking-widest font-light transition hover:opacity-70" style="color: #ba95fa;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z"/>
                    </svg>
                    View Photo
                </button>
            </div>

            {{-- Lightbox Modal --}}
            <div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-sm" onclick="closeLightbox()">
                <div class="relative max-w-2xl w-full mx-4" onclick="event.stopPropagation()">
                    <img id="lightbox-img" src="" class="w-full max-h-[85vh] object-contain rounded-sm shadow-2xl">
                    <button onclick="closeLightbox()" class="absolute -top-4 -right-4 bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-md text-gray-500 hover:text-gray-800 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Kanan: Teks --}}
            <div class="w-full md:w-1/2 text-left">
                <svg class="h-8 w-8 mb-5 opacity-50" viewBox="0 0 24 24" fill="#ba95fa">
                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                </svg>
                <p id="testi-teks" class="text-gray-500 text-base font-light leading-relaxed italic mb-6 transition-opacity duration-500">
                    "OMAIGATTT KAKK BUKETNYA BAGUS BANGETT aku bener bener sukakk ini pas banget kak sesuai request an aku mantapp pokoknyaa, temen aku yg dikasih nya juga katanya sukaa bangett kakk sama buketnyaaa"
                </p>
                <p id="testi-nama" class="text-sm uppercase tracking-widest font-light transition-opacity duration-500" style="color: #ba95fa;">&mdash; Shaluna</p>

                {{-- Dot Indicator --}}
                <div class="flex gap-2 mt-8">
                    <span class="testi-dot w-6 h-1 rounded-full transition-all duration-300" style="background-color: #ba95fa;"></span>
                    <span class="testi-dot w-2 h-1 rounded-full bg-gray-300 transition-all duration-300"></span>
                    <span class="testi-dot w-2 h-1 rounded-full bg-gray-300 transition-all duration-300"></span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const testiData = [
            {
                foto: "{{ asset('assets/image/testimoni/testimoni1.jpg') }}",
                teks: '"OMAIGATTT KAKK BUKETNYA BAGUS BANGETT aku bener bener sukakk ini pas banget kak sesuai request an aku mantapp pokoknyaa, temen aku yg dikasih nya juga katanya sukaa bangett kakk sama buketnyaaa"',
                nama: '&mdash; Shaluna'
            },
            {
                foto: "{{ asset('assets/image/testimoni/testimoni2.jpg') }}",
                teks: '"Kak makasih banyak ya ini cewekku suka banget sama bunganya, dia bener bener excited tdi wkwk tunggu aja next ordernya ya kak"',
                nama: '&mdash; Ramdhan'
            },
            {
                foto: "{{ asset('assets/image/testimoni/testimoni3.jpg') }}",
                teks: '"Kak seneng bangettt sesuai ekspetasiiii and bentuk buketnya bener-bener realpict sesuai custom yang aku mau, aku kasih ke cowo aku yang pelantikan dan katanya dia juga sukaa makasiiii yaaa next repeat orderrr"',
                nama: '&mdash; Elsa'
            },
        ];

        let testiCurrent = 0;
        const foto = document.getElementById('testi-foto');
        const teks = document.getElementById('testi-teks');
        const nama = document.getElementById('testi-nama');
        const dots = document.querySelectorAll('.testi-dot');

        function openLightbox() {
            const lb = document.getElementById('lightbox');
            document.getElementById('lightbox-img').src = foto.src;
            lb.classList.remove('hidden');
            lb.classList.add('flex');
        }
        function closeLightbox() {
            const lb = document.getElementById('lightbox');
            lb.classList.add('hidden');
            lb.classList.remove('flex');
        }
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });

        function updateDots(index) {
            dots.forEach((dot, i) => {
                dot.style.backgroundColor = i === index ? '#ba95fa' : '#D1D5DB';
                dot.style.width = i === index ? '24px' : '8px';
            });
        }

        setInterval(() => {
            testiCurrent = (testiCurrent + 1) % testiData.length;
            const data = testiData[testiCurrent];

            foto.style.opacity = '0';
            teks.style.opacity = '0';
            nama.style.opacity = '0';

            setTimeout(() => {
                foto.src = data.foto;
                teks.textContent = data.teks;
                nama.innerHTML = data.nama;
                updateDots(testiCurrent);

                foto.style.opacity = '1';
                teks.style.opacity = '1';
                nama.style.opacity = '1';
            }, 500);
        }, 3000);
    </script>
</section>

{{-- Why Us Section --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-light italic mb-12" style="font-family: 'Cormorant Garamond', serif;">Why Choose Floristy</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-gray-500 text-sm font-light">
            <div>
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c0 0-4 4-4 8a4 4 0 008 0c0-4-4-8-4-8z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11v10M9 21h6" />
                    </svg>
                </div>
                <h4 class="text-lg italic mb-2" style="font-family: 'Cormorant Garamond', serif;">Fresh Daily</h4>
                <p>Every bouquet is prepared fresh on the day of delivery.</p>
            </div>
            <div>
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 3l-4 4-4-4" />
                    </svg>
                </div>
                <h4 class="text-lg italic mb-2" style="font-family: 'Cormorant Garamond', serif;">Elegant Packaging</h4>
                <p>Beautifully wrapped to make every gift feel special.</p>
            </div>
            <div>
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                </div>
                <h4 class="text-lg italic mb-2" style="font-family: 'Cormorant Garamond', serif;">Same Day Delivery</h4>
                <p>Order before 12PM and receive your flowers today.</p>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-14">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-2">Ada Pertanyaan?</p>
            <h2 class="text-4xl font-light italic" style="font-family: 'Cormorant Garamond', serif;">Frequently Asked Questions</h2>
        </div>

        <div class="divide-y divide-gray-100" id="faq-list">
            @foreach([
                ['Bagaimana cara melakukan pemesanan?', 'Pemesanan dapat dilakukan melalui WhatsApp atau Instagram DM. Hubungi kami melalui kontak yang tersedia, lalu sampaikan jenis bouquet yang ingin dipesan.'],
                ['Apakah bisa request atau custom bouquet?', 'Tentu bisa! Kami menerima berbagai request desain sesuai keinginan Anda. Untuk pemesanan custom, disarankan melakukan pemesanan minimal 5–7 hari sebelumnya agar hasil dapat dipersiapkan dengan maksimal.'],
                ['Berapa lama proses pengerjaan?', 'Untuk pesanan custom atau request khusus, kami menyarankan melakukan pemesanan minimal 5–7 hari sebelum tanggal yang diinginkan agar pesanan dapat selesai tepat waktu.'],
                ['Metode pembayaran apa saja yang tersedia?', 'Kami menerima Cash (COD saat pengambilan), ShopeePay, Transfer Bank, dan metode pembayaran digital lainnya.'],
                ['Bagaimana sistem pengiriman?', 'Pesanan dapat dikirim melalui GoSend, Self Pick Up (daerah Cijerah), atau COD di SMKN 1 Bandung pada hari kerja dan waktu tertentu.'],
                ['Di mana saya bisa melihat daftar harga?', 'Daftar harga tersedia pada halaman Price List di website. Harga dapat berbeda tergantung jenis bouquet, ukuran, dan tingkat kesulitan pembuatan.'],
                ['Apakah harga bisa berubah?', 'Ya. Harga dapat berubah menyesuaikan bahan yang digunakan, ukuran bouquet, tingkat kesulitan, dan permintaan khusus dari pelanggan.'],
                ['Bagaimana cara menghubungi Floristy Keynyla?', 'Anda dapat menghubungi kami melalui WhatsApp: 0821-1637-9226 atau Instagram: @floristy.keynyla'],
            ] as $i => $faq)
            <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq({{ $i }})">
                <div class="flex items-center justify-between gap-4">
                    <p class="text-sm font-light tracking-wide text-gray-700">{{ $faq[0] }}</p>
                    <svg class="faq-icon h-4 w-4 flex-shrink-0 transition-transform duration-300" style="color: #ba95fa;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="faq-answer overflow-hidden max-h-0 transition-all duration-300">
                    <p class="text-sm text-gray-400 font-light leading-relaxed pt-3 pr-8">{{ $faq[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleFaq(index) {
            const items = document.querySelectorAll('.faq-item');
            const item = items[index];
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Close all
            items.forEach(el => {
                el.querySelector('.faq-answer').style.maxHeight = '0px';
                el.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        }
    </script>
</section>

@endsection
