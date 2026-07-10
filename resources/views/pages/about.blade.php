@extends('main')

@section('title', 'About - Floristy Keynyla')

@section('content')

{{-- Breadcrumb --}}
<div class="px-6 pt-4 pb-0 bg-white" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
    <div class="max-w-6xl mx-auto flex items-center gap-2 text-xs text-gray-400 font-light tracking-wide">
        <a href="/" class="hover:text-purple-400 transition">Home</a>
        <span>/</span>
        <span style="color: #ba95fa;">About</span>
    </div>
</div>

{{-- Hero About --}}
<section class="pr-6 pb-16 pl-0 pt-6" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">
        <div class="w-full md:w-1/2 flex-shrink-0">
            <img src="{{ asset('assets/image/hero/hero1.png') }}" alt="About Floristy" class="w-full h-96 object-contain object-left">
        </div>
        <div class="w-full md:w-1/2 text-center md:text-left px-6 md:px-0">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Our Story</p>
            <h1 class="text-5xl font-light italic mb-6" style="font-family: 'Cormorant Garamond', serif;">About Floristy Keynyla</h1>
            <p class="text-gray-400 font-light leading-relaxed text-sm">
                Floristy Keynyla adalah tempat di mana setiap rangkaian bunga diciptakan untuk menyebarkan kebahagiaan. Kami hadir dengan berbagai varian buket yang dapat disesuaikan dengan setiap kebutuhan dan momen spesial Anda.
            </p>
        </div>
    </div>
</section>

{{-- Our Story --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Who We Are</p>
        <h2 class="text-4xl font-light italic mb-8" style="font-family: 'Cormorant Garamond', serif;">Handcrafted with Love</h2>
        <p class="text-gray-400 font-light leading-relaxed text-sm max-w-2xl mx-auto">
            Dari buket kawat bulu yang unik, money bouquet yang elegan, hingga artificial flower yang tahan lama — kami siap membantu Anda merayakan setiap momen dengan penuh cinta dan keindahan.
        </p>
    </div>
</section>

{{-- Meet the Maker --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-14">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">The Person Behind It</p>
            <h2 class="text-4xl font-light italic" style="font-family: 'Cormorant Garamond', serif;">Meet the Maker</h2>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-12">
            {{-- Foto Grid --}}
            <div class="w-full md:w-1/2 grid grid-cols-2 gap-3">
                <div class="col-span-2 overflow-hidden rounded-sm" style="aspect-ratio: 4/3;">
                    <img src="{{ asset('assets/image/founder/founder1.JPG') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="overflow-hidden rounded-sm" style="aspect-ratio: 1/1;">
                    <img src="{{ asset('assets/image/founder/founder2.jpg') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="overflow-hidden rounded-sm" style="aspect-ratio: 1/1;">
                    <img src="{{ asset('assets/image/founder/founder3.JPG') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>

            {{-- Teks --}}
            <div class="w-full md:w-1/2 text-center md:text-left">
                <p class="text-xs uppercase tracking-[0.4em] mb-4" style="color: #ba95fa;">Founder & Maker</p>
                <h3 class="text-3xl font-light italic mb-6" style="font-family: 'Cormorant Garamond', serif;">Keynyla</h3>
                <p class="text-gray-400 font-light leading-relaxed text-sm mb-4">
                    Di balik setiap buket yang cantik, ada tangan yang bekerja dengan penuh dedikasi dan rasa cinta. Keynyla memulai Floristy dari hobi merangkai bunga yang kemudian berkembang menjadi sebuah karya yang dikenal banyak orang.
                </p>
                <p class="text-gray-400 font-light leading-relaxed text-sm">
                    Setiap pesanan ditangani secara personal — dari konsultasi desain hingga pengemasan akhir — untuk memastikan setiap buket benar-benar sesuai dengan harapan pelanggan.
                </p>

                <div class="flex gap-4 mt-8 justify-center md:justify-start">
                    <a href="https://instagram.com/floristy.keynyla" target="_blank" class="flex items-center gap-2 text-xs uppercase tracking-widest font-light transition hover:opacity-70" style="color: #ba95fa;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="#ba95fa">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                        @floristy.keynyla
                    </a>
                    <a href="https://wa.me/6282116379226" target="_blank" class="flex items-center gap-2 text-xs uppercase tracking-widest font-light transition hover:opacity-70" style="color: #ba95fa;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="#ba95fa">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.859L.057 23.428a.75.75 0 00.921.921l5.569-1.476A11.943 11.943 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.7-.504-5.25-1.385l-.372-.217-3.853 1.021 1.021-3.853-.217-.372A9.944 9.944 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                        </svg>
                        0821-1637-9226
                    </a>
                </div>
            </div>
        </div>

        {{-- Foto bawah: sisa 2 foto --}}
        <div class="grid grid-cols-2 gap-3 mt-3">
            <div class="overflow-hidden rounded-sm" style="aspect-ratio: 4/3;">
                <img src="{{ asset('assets/image/founder/founder 4.jpg') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
            </div>
            <div class="overflow-hidden rounded-sm" style="aspect-ratio: 4/3;">
                <img src="{{ asset('assets/image/founder/founder5.png') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>
</section>

{{-- Varian Buket --}}
<section class="bg-white py-20 px-6 border-t border-gray-100">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-14">
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">What We Offer</p>
            <h2 class="text-4xl font-light italic" style="font-family: 'Cormorant Garamond', serif;">Varian Buket Kami</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center text-gray-400 text-sm font-light">
            <div>
                <div class="flex justify-center mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                </div>
                <h4 class="text-lg italic mb-3" style="font-family: 'Cormorant Garamond', serif;">Buket Kawat Bulu</h4>
                <p class="leading-relaxed">Rangkaian buket yang unik dan kreatif dengan sentuhan kawat dan bulu yang memberikan tampilan artistik dan modern. Dibuat dengan penuh ketelitian untuk hasil yang cantik.</p>
            </div>
            <div>
                <div class="flex justify-center mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <h4 class="text-lg italic mb-3" style="font-family: 'Cormorant Garamond', serif;">Money Bouquet</h4>
                <p class="leading-relaxed">Buat hadiah lebih istimewa dengan money bouquet — perpaduan uang yang dilipat dengan rangkaian bunga. Dilengkapi plastik opp untuk melindungi uang agar tetap aman.</p>
            </div>
            <div>
                <div class="flex justify-center mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center" style="background-color: #f9f4ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ba95fa" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                        </svg>
                    </div>
                </div>
                <h4 class="text-lg italic mb-3" style="font-family: 'Cormorant Garamond', serif;">Artificial Flower</h4>
                <p class="leading-relaxed">Rangkaian bunga buatan yang tahan lama dan tetap indah tanpa perawatan. Terbuat dari bunga pilihan yang cantik dan elegan untuk segala momen.</p>
            </div>
        </div>
    </div>
</section>

{{-- Testimoni Snippet --}}
<section class="py-20 px-6 border-t border-gray-100" style="background: linear-gradient(to bottom, #f9f4ff, #ffffff);">
    <div class="max-w-5xl mx-auto text-center">
        <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Happy Customers</p>
        <h2 class="text-4xl font-light italic mb-12" style="font-family: 'Cormorant Garamond', serif;">What They Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['OMAIGATTT KAKK BUKETNYA BAGUS BANGETT sesuai request an aku mantapp pokoknyaa!', 'Shaluna'],
                ['Makasih banyak ya kak, cewekku suka banget sama bunganya, dia bener bener excited!', 'Ramdhan'],
                ['Sesuai ekspetasi banget! Bentuk buketnya realpict sesuai custom yang aku mau.', 'Elsa'],
            ] as $t)
            <div class="bg-white rounded-sm shadow-sm p-6 text-left">
                <svg class="h-5 w-5 mb-3 opacity-40" viewBox="0 0 24 24" fill="#ba95fa">
                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                </svg>
                <p class="text-gray-400 text-sm font-light leading-relaxed italic mb-4">"{{ $t[0] }}"</p>
                <p class="text-xs uppercase tracking-widest font-light" style="color: #ba95fa;">— {{ $t[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 px-6 text-center border-t border-gray-100" style="background: linear-gradient(to right, #f9f4ff, #fdf0ff);">
    <p class="text-xs uppercase tracking-[0.4em] text-gray-400 mb-3">Yuk, pesan sekarang!</p>
    <h2 class="text-3xl font-light italic mb-6" style="font-family: 'Cormorant Garamond', serif;">Buat Momen Jadi Lebih Berkesan</h2>
    <a href="/shop" class="inline-block px-10 py-3 text-sm uppercase tracking-widest text-white transition hover:opacity-80" style="background-color: #ba95fa;">
        Shop Now
    </a>
</section>

@endsection
