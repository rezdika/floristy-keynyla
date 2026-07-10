<nav style="background: linear-gradient(to right, #ba95fa, #e4c4fd, #e3c4fc);" class="px-8 py-4 flex items-center justify-between shadow-sm relative z-50">
    <a href="/" class="flex items-center gap-3">
        <img src="{{ asset('assets/image/logo/logobucket.png') }}" alt="Floristy Keynyla Logo" class="h-14 w-auto">
        <div>
            <p class="text-white text-2xl leading-none tracking-widest" style="font-family: 'Cormorant Garamond', serif; font-style: italic; font-weight: 300;">Floristy Keynyla</p>
            <p class="text-white/70 text-xs tracking-widest font-light">Buy your happiness with flowers</p>
        </div>
    </a>

    {{-- Desktop Menu --}}
    <ul class="hidden md:flex items-center gap-8 text-white text-sm tracking-widest uppercase font-light">
        <li><a href="/" class="hover:opacity-70 transition">Home</a></li>
        <li><a href="/shop" class="hover:opacity-70 transition">Shop</a></li>
        <li><a href="/about" class="hover:opacity-70 transition">About</a></li>
        <li><a href="/contact" class="hover:opacity-70 transition">Contact</a></li>
    </ul>

    {{-- Hamburger Button (mobile only) --}}
    <button onclick="toggleSidebar()" class="md:hidden text-white focus:outline-none">
        <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
</nav>

{{-- Overlay --}}
<div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/40 z-40 hidden"></div>

{{-- Sidebar --}}
<div id="sidebar" class="fixed top-0 right-0 h-full w-64 z-50 shadow-xl flex flex-col transform translate-x-full transition-transform duration-300" style="background: linear-gradient(to bottom, #ba95fa, #e4c4fd);">
    <div class="flex items-center justify-between px-6 py-5 border-b border-white/20">
        <p class="text-white text-lg italic font-light tracking-widest" style="font-family: 'Cormorant Garamond', serif;">Menu</p>
        <button onclick="toggleSidebar()" class="text-white hover:opacity-70 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    <ul class="flex flex-col px-6 py-8 gap-6 text-white text-sm tracking-widest uppercase font-light">
        <li><a href="/" onclick="toggleSidebar()" class="hover:opacity-70 transition">Home</a></li>
        <li><a href="/shop" onclick="toggleSidebar()" class="hover:opacity-70 transition">Shop</a></li>
        <li><a href="/about" onclick="toggleSidebar()" class="hover:opacity-70 transition">About</a></li>
        <li><a href="/contact" onclick="toggleSidebar()" class="hover:opacity-70 transition">Contact</a></li>
    </ul>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const isOpen = sidebar.style.transform === 'translateX(0px)' || sidebar.style.transform === 'translateX(0%)';

        sidebar.style.transform = isOpen ? 'translateX(100%)' : 'translateX(0%)';
        overlay.classList.toggle('hidden', isOpen);
    }
</script>
