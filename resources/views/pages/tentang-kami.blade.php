@extends('template')
@section('konten')
    <div class="main w-full">
        @include('component.navbar')
        <div class="tentang-kami w-full justify-center items-center grid grid-cols-1 max-md:mt-20">
            <div class="info flex flex-col gap-2 pt-10 justify-center items-center px-10 md:px-20">
                <h1 class="text-3xl font-semibold capitalize max-md:text-center">Selamat Datang di Halaman Ekstrakurikuler SMKN 1 Kota Bekasi!
                    🎉✨</h1>
                <h1 class="text-lg md:text-xl md:w-8/12 text-center max-md:text-justify">Di SMKN 1 Kota Bekasi, kami menyediakan berbagai pilihan
                    kegiatan ekstrakurikuler yang dapat membantu siswa mengembangkan minat dan bakat mereka 🌈. Mulai dari
                    bidang seni 🎨, olahraga ⚽, teknologi 💻, hingga organisasi 🌍, setiap siswa memiliki kesempatan untuk
                    mengeksplorasi diri mereka lebih jauh.</h1>
                    <div class="txt-foot md:m-5 my-4">
                        <h1 class="text-lg md:text-xl text-justify">Mari bergabung dan jadilah bagian dari komunitas aktif
                            yang mendukung perkembangan diri dan bakat Anda! 🌟✨
                        </h1>
                        <h1 class="text-lg md:text-xl text-center max-md:text-justify">Marertarik untuk ikut? Hubungi pembina ekstrakurikuler
                            📞 atau kunjungi kami di ruang OSIS 🏫 untuk informasi lebih lanjut. 😊
                        </h1>
                    </div>
            </div>

        </div>
        @include('component.footer')
    </div>
@endsection
