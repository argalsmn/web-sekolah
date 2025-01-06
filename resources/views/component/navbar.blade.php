{{-- navbar --}}
<div class="navbar z-50 lg:px-20 lg;py-10 px-2 py-4 top-0 backdrop-blur-lg w-full gap-1 capitalize text-lg flex fixed lg:relative">
    <div class="logo flex items-center gap-4 z-1 lg:w-3/6 w-full">
        <img src="{{ asset('aset/smk-no-bg.png') }}" class="w-2/12 lg:w-1/12 max-md:hidden" alt="logo">
        <h1 class="capitalize text-3xl font-semibold lg:p-0 px-2 py-4">SMKN 1 kota bekasi</h1>
    </div>

    <div class="section flex font-medium text-lg font-sans w-full justify-end pr-0 lg:pr-32">
        <!-- Burger Button (visible only on small screens) -->
        <div
            class="lg:hidden flex max-lg:items-center max-lg:py-2 justify-end max-lg:pr-4 max-lg:text-end max-lg:w-full">
            <div id="burger" class="p-2 focus:outline-none relative z-[999] flex flex-col justify-center">
                <span id="line1" class=" left-0 w-8 h-[0.1rem] bg-black duration-200 mb-2"></span>
                <span id="line2" class="left-0 w-8 h-[0.1rem] bg-black duration-200"></span>
            </div>
        </div>

        <!-- Menu items -->
        <div id="menu"
            class="hidden w-full lg:flex font-normal text-xl text-end justify-end items-center gap-12 ">
            <a href="{{ url('/') }}" class="flex gap-2">
                <i class="bi bi-house"></i>
                <h1 class="hover:font-semibold">beranda</h1>
            </a>
            <a href="{{ url('/jurusan') }}" class="flex gap-2">
                <i class="bi bi-gear"></i>
                <h1 class="hover:font-semibold">jurusan</h1>
            </a>
            {{-- <a href="{{ url('/tentang-kami') }}" class="flex gap-2">
                <i class="bi bi-person"></i>
                <h1 class="hover:font-semibold">tentang kami</h1>
            </a> --}}
            {{-- <a href="{{ url('/galeri') }}" class="flex gap-2">
                <i class="bi bi-camera"></i>
                <h1 class="hover:font-semibold">galeri</h1>
            </a> --}}
            <a href="{{ url('/contact') }}" class="flex gap-2">
                <i class="bi bi-telephone"></i>
                <h1 class="hover:font-semibold">hubungi<span class=""> kami</span></h1>
            </a>
            <a href="{{ url('/dashboard') }}" class="flex gap-2">
                <i class="bi bi-key"></i>
                <h1 class="hover:font-semibold">log <span class=""> In</span></h1>
            </a>
        </div>

        <!-- Dropdown for mobile -->
        <div id="dropdown" class="hidden bg-white top-0 left-0 w-full space-y-2 lg:mt-2 h-screen z-50 fixed">
            <div class="absolute bottom-0 w-full">
                <a href="{{ url('/') }}">
                    <h1 class="text-black text-3xl px-2 py-4">beranda</h1>
                </a>
                <a href="{{ url('/jurusan') }}">
                    <h1 class="text-black text-3xl px-2 py-4">jurusan</h1>
                </a>
                {{-- <a href="{{ url('/tentang-kami') }}">
                    <h1 class="text-black text-3xl px-2 py-4">tentang kami</h1>
                </a> --}}
                {{-- <a href="{{ url('/galeri') }}">
                    <h1 class="text-black text-3xl px-2 py-4">galeri</h1>
                </a> --}}
                <a href="{{ url('/contact') }}">
                    <h1 class="text-black text-3xl px-2 py-4">hubungi kami</h1>
                </a>
                <a href="{{ url('/dashboard') }}">
                    <h1 class="text-black text-3xl px-2 py-4">log In</h1>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- navbar end --}}
<script>
    const burger = document.getElementById("burger");
    const menu = document.getElementById("menu");
    const dropdown = document.getElementById("dropdown");
    const l1 = document.getElementById("line1");
    const l2 = document.getElementById("line2");

    burger.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");

        if (dropdown.classList.contains("hidden")) {
            document.body.style.overflowY = "";
            line1.style.transform = 'translateX(0) rotate(0deg)';
            line2.style.transform = 'translateX(0) rotate(0deg)';
        } else {
            document.body.style.overflowY = "hidden";
            line1.style.transform = 'translateY(5px) rotate(-45deg)';
            line2.style.transform = 'translateY(-5px) rotate(45deg)';
        }
    });
</script>