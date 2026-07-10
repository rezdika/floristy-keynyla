@extends('main')

@section('title', 'Contact - Floristy Keynyla')

@section('content')

{{-- Breadcrumb --}}
<div class="px-6 pt-4 pb-0" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
    <div class="max-w-6xl mx-auto flex items-center gap-2 text-xs text-gray-400 font-light tracking-wide">
        <a href="/" class="hover:text-purple-400 transition">Home</a>
        <span>/</span>
        <span style="color: #ba95fa;">Contact</span>
    </div>
</div>

{{-- Header --}}
<section class="relative min-h-[60vh] flex items-stretch">

    {{-- Kiri: BG + Buket Slideshow --}}
    <div class="w-1/2 relative overflow-hidden hidden md:block">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/image/bg/bg1.png') }}');"></div>
        <div class="absolute inset-0 bg-black/0"></div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <img id="contact-buket" src="{{ asset('assets/image/buket/buket1.png') }}" class="h-80 object-contain drop-shadow-2xl transition-opacity duration-500">
        </div>
    </div>

    {{-- Kanan: Teks --}}
    <div class="w-full md:w-1/2 flex items-center justify-center px-10 py-16" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
        <div class="text-center md:text-left">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Hubungi Kami</p>
            <h1 class="text-5xl font-light italic" style="font-family: 'Cormorant Garamond', serif;">Get in Touch</h1>
        </div>
    </div>

</section>

<script>
    const contactBukets = [
        "{{ asset('assets/image/buket/buket1.png') }}",
        "{{ asset('assets/image/buket/buket2.png') }}",
        "{{ asset('assets/image/buket/buket3.png') }}",
    ];
    let contactBuketIdx = 0;
    const contactBuketImg = document.getElementById('contact-buket');
    setInterval(() => {
        contactBuketIdx = (contactBuketIdx + 1) % contactBukets.length;
        contactBuketImg.style.opacity = '0';
        setTimeout(() => {
            contactBuketImg.src = contactBukets[contactBuketIdx];
            contactBuketImg.style.opacity = '1';
        }, 500);
    }, 3000);
</script>

{{-- Contact Content --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-start">

        {{-- Kiri: Info Kontak --}}
        <div>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Reach Us</p>
            <h2 class="text-3xl font-light italic mb-8" style="font-family: 'Cormorant Garamond', serif;">Kami siap membantu kamu</h2>
            <p class="text-sm text-gray-400 font-light leading-relaxed mb-10">
                Punya pertanyaan soal produk, ingin custom bouquet, atau sekadar ingin tahu lebih lanjut? Jangan ragu untuk menghubungi kami melalui WhatsApp atau Instagram.
            </p>

            <div class="space-y-6">
                {{-- WhatsApp --}}
                <a href="https://wa.me/6282116379226" target="_blank" class="flex items-center gap-4 group">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 transition group-hover:opacity-80" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="#ba95fa">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.859L.057 23.428a.75.75 0 00.921.921l5.569-1.476A11.943 11.943 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.7-.504-5.25-1.385l-.372-.217-3.853 1.021 1.021-3.853-.217-.372A9.944 9.944 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-gray-300 mb-0.5">WhatsApp</p>
                        <p class="text-sm font-light text-gray-600 group-hover:text-purple-400 transition">0821-1637-9226</p>
                    </div>
                </a>

                {{-- Instagram --}}
                <a href="https://instagram.com/floristy.keynyla" target="_blank" class="flex items-center gap-4 group">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 transition group-hover:opacity-80" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="#ba95fa">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-gray-300 mb-0.5">Instagram</p>
                        <p class="text-sm font-light text-gray-600 group-hover:text-purple-400 transition">@floristy.keynyla</p>
                    </div>
                </a>

                {{-- Lokasi --}}
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-gray-300 mb-0.5">Lokasi</p>
                        <p class="text-sm font-light text-gray-600">Cijerah, Bandung</p>
                    </div>
                </div>

                {{-- Jam Operasional --}}
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-gray-300 mb-0.5">Jam Operasional</p>
                        <p class="text-sm font-light text-gray-600">Senin – Rabu, 09.00 – 18.00 WIB</p>
                        <p class="text-sm font-light text-gray-600">Kamis – Jumat, 09.00 – 20.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kanan: Form --}}
        <div>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Send a Message</p>
            <h2 class="text-3xl font-light italic mb-8" style="font-family: 'Cormorant Garamond', serif;">Kirim Pesan</h2>

            <form action="https://wa.me/6282116379226" id="contact-form" class="space-y-5">
                <div>
                    <label class="text-xs uppercase tracking-widest text-gray-400 font-light block mb-2">Nama</label>
                    <input type="text" id="form-nama" placeholder="Nama kamu" class="w-full border border-gray-200 px-4 py-3 text-sm font-light text-gray-600 outline-none focus:border-purple-300 transition rounded-sm" style="background-color: #fdfbff;">
                </div>
                <div>
                    <label class="text-xs uppercase tracking-widest text-gray-400 font-light block mb-2">Pesan</label>
                    <textarea id="form-pesan" rows="5" placeholder="Tulis pesanmu di sini..." class="w-full border border-gray-200 px-4 py-3 text-sm font-light text-gray-600 outline-none focus:border-purple-300 transition rounded-sm resize-none" style="background-color: #fdfbff;"></textarea>
                </div>
                <button type="button" onclick="sendToWA()" class="w-full py-3 text-sm uppercase tracking-widest text-white transition hover:opacity-80" style="background-color: #ba95fa;">
                    Kirim via WhatsApp
                </button>
            </form>
        </div>

    </div>
</section>

<script>
    function sendToWA() {
        const nama = document.getElementById('form-nama').value.trim();
        const pesan = document.getElementById('form-pesan').value.trim();
        if (!nama || !pesan) {
            alert('Mohon isi nama dan pesan terlebih dahulu.');
            return;
        }
        const text = `Halo Floristy Keynyla, perkenalkan saya ${nama}.\n\n${pesan}`;
        window.open(`https://wa.me/6282116379226?text=${encodeURIComponent(text)}`, '_blank');
    }
</script>

@endsection
