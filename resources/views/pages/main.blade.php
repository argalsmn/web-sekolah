@extends('template')
@section('konten')
    <div class="main w-full">
        @include('component.navbar')
        <div style="background-image: url('/aset/bg-sch.pngg')" class="bg-white bg-cover bg-center bg-opacity-50 backdrop-blur-md w-full md:p-20 p-8 max-md:mt-32">
            <div class="welcome md:py-5 md:px-20 flex flex-col md:gap-4 gap-2">
                <h1 class="md:text-3xl text-xl uppercase font-semibold">🎉 Selamat Datang di Website SMK Kami! 🎉</h1>
                <h1 class="md:text-7xl text-3xl font-semibold">Halo, selamat datang di website resmi SMKN 1 Kota Bekasi! 😊</h1>
            </div>
            <div class="more w-full md:py-5 md:px-20 md:mt-10 mt-5">
                <h1 class="md:text-4xl text-2xl capitalize font-semibold">💡 Apa yang bisa Anda temukan di sini?</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 mt-5">
                    <a href="{{ url('/jurusan') }}" class="cursor-pointer">
                        <div class="flex flex-col w-auto bg-blue-500 text-white bg-opacity-100 backdrop-blur-sm justify-center items-center gap-2 p-5 rounded-lg">
                            <div class="text w-full flex justify-center items-center gap-2">
                                <i class="bi bi-book"></i>
                                <h1 class="md:text-xl text-md font-semibold capitalize">Informasi lengkap tentang jurusan kami 📚</h1>
                            </div>
                        </div>
                    </a>
                    <a href="#data-alumni" class="cursor-pointer">
                        <div class="flex flex-col w-auto bg-blue-500 text-white bg-opacity-100 backdrop-blur-sm justify-center items-center gap-2 p-5 rounded-lg">
                            <div class="text w-full flex justify-center items-center gap-2">
                                <i class="bi bi-award"></i>
                                <h1 class="md:text-xl text-md font-semibold capitalize">data lulusan kami 🏆</h1>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/contact') }}" class="cursor-pointer">
                        <div class="flex flex-col w-auto bg-blue-500 text-white bg-opacity-100 backdrop-blur-sm justify-center items-center gap-2 p-5 rounded-lg">
                            <div class="text w-full flex justify-center items-center gap-2">
                                <i class="bi bi-envelope"></i>
                                <h1 class="md:text-xl text-md font-semibold capitalize">Bisa contact kita disini !📞</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="data-alumni" class="alumni w-full flex flex-col md:gap-2 gap-6 md:px-20 md:mt-8 mt-5">
                <div class="text w-full flex justify-end">
                    <h1 class="md:text-3xl text-2xl capitalize font-semibold md:w-8/12">🎓 Selain Lulus dan Menjadi Pekerja, Kami Juga Memiliki Lulusan yang Melanjutkan ke Jenjang Pendidikan yang Lebih Tinggi! 🎓</h1>
                </div>

                {{-- loop data alumni --}}
                {{-- <div class="list w-full grid md:grid-cols-4 grid-cols-2 gap-4 items-center md:mt-5">
                    @foreach ($alumni as $item)
                        <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                            <img src="{{ url('aset/'. $item->universitas .'.png') }}" alt="" class="w-auto h-20">
                            <div class="data">
                                <h1 class="md:text-2xl text-xl font-semibold capitalize">{{ $item->nama }}</h1>
                                <h1 class="md:text-lg text-sm capitalize">{{ $item->jurusan }}</h1>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                {{-- loop data alumni end --}}

                {{-- data alumni sampel --}}
                <div class="list w-full grid md:grid-cols-4 grid-cols-2 gap-4 items-center md:mt-5">
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/ugm.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">danil fadly</h1>
                            <h1 class="md:text-lg text-sm capitalize">teknik msein</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/unair.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">dharma fattahul winxi</h1>
                            <h1 class="md:text-lg text-sm capitalize">teknik elektro</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/unair.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">nadia janeeta adha</h1>
                            <h1 class="md:text-lg text-sm capitalize">teknik robotik</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/ipb.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">m daffa singawinata</h1>
                            <h1 class="md:text-lg text-sm capitalize">teknik rpl</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/ipb.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">siti rohayati</h1>
                            <h1 class="md:text-lg text-sm capitalize">manajemen industri</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/ub.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">adje nur alim</h1>
                            <h1 class="md:text-lg text-sm capitalize">agribisnis</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/ub.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">alisha dwi fatika</h1>
                            <h1 class="md:text-lg text-sm capitalize">ekonomi islam</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/ub.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">nida rindy pramaysella</h1>
                            <h1 class="md:text-lg text-sm capitalize">akutansi</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/undip.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">xandira felisha</h1>
                            <h1 class="md:text-lg text-sm capitalize">rekayasa perancangan mekanik</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/undip.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">surya fachmeizza ferdiansyah</h1>
                            <h1 class="md:text-lg text-sm capitalize">perkapalan</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/upi.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">maldini syaif ali</h1>
                            <h1 class="md:text-lg text-sm capitalize">sistem informasi</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/upi.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">m rafi zamzam</h1>
                            <h1 class="md:text-lg text-sm capitalize">rekayasa perangkat lunak</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/upi.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">norma agesti</h1>
                            <h1 class="md:text-lg text-sm capitalize">akutansi</h1>
                        </div>
                    </div>
                    <div class="list-data flex w-full gap-4 items-center md:p-4 p-2 rounded-lg bg-white shadow-lg">
                        <img src="{{ url('aset/upi.png') }}" alt="" class="w-auto h-20">
                        <div class="data">
                            <h1 class="md:text-2xl text-xl font-semibold capitalize">annisa harti</h1>
                            <h1 class="md:text-lg text-sm capitalize">tata busana</h1>
                        </div>
                    </div>
                </div>
                {{-- data alumni sampel end --}}

            </div>
        </div>
        @include('component.footer')
    </div>
@endsection