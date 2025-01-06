@extends('template')
@section('konten')
    <div class="main w-full">
        @include('component.navbar')
        <div class="jurusan w-full justify-center items-center grid grid-cols-1 max-md:mt-24">
            <div class="info flex flex-col gap-2 pt-10 justify-center items-center px-10 md:px-20">
                <h1 class="text-3xl font-semibold capitalize">Jurusan di SMKN 1 Kota Bekasi</h1>
                <h1 class="text-lg md:text-xl md:w-8/12 text-center">SMKN 1 Kota Bekasi menawarkan 8 jurusan unggulan 📚✨
                    yang dirancang untuk membekali
                    siswa dengan pengetahuan dan keterampilan sesuai dengan kebutuhan industri modern 🏭💻. Setiap jurusan
                    memiliki fasilitas lengkap 🛠️🏫, pengajar berpengalaman 👩‍🏫👨‍🏫, dan program pembelajaran berbasis
                    praktik 🎓🔧 untuk memastikan lulusan siap kerja 🧑‍💼✔️ maupun melanjutkan ke jenjang pendidikan yang
                    lebih tinggi 🎓🌟.</h1>
            </div>
            <div class="jurusan w-full grid grid-cols-2 md:grid-cols-4 gap-6 p-10 md:px-20 justify-center items-center">
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">akutansi📊📈💵</h1>
                    <h1 class="md:text-base font-light capitalize">Jurusan Akuntansi mempelajari prinsip-prinsip
                        akuntansi, pengelolaan keuangan, perpajakan, dan audit.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">busanan butik👗🧵✂️</h1>
                    <h1 class="md:text-base font-light capitalize">Jurusan Busana Butik mempelajari desain,
                        pembuatan, dan pengelolaan busana, serta bisnis fashion.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">desain komunikasi visual🎨🖌️🖼️</h1>
                    <h1 class="md:text-base font-light capitalize">jurusan DKV mempelajari desain grafis, ilustrasi,
                        fotografi, dan komunikasi visual.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">teknik komputer jaringan💻🌐🛠️</h1>
                    <h1 class="md:text-base font-light capitalize">Jurusan TKJ mempelajari instalasi, konfigurasi,
                        dan manajemen jaringan komputer.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">rekayasa perangkat lunak🧑‍💻📱</h1>
                    <h1 class="md:text-base font-light capitalize">Jurusan RPL mempelajari pengembangan perangkat
                        lunak, algoritma, dan bahasa pemrograman.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">teknik kendaraan ringan🚗🔧🛞</h1>
                    <h1 class="md:text-base font-light capitalize">Jurusan TKR mempelajari perawatan, perbaikan, dan
                        modifikasi kendaraan ringan.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">teknik permesinan⚙️🔩🏭</h1>
                    <h1 class="md:text-base font-light capitalize">jurusan TP mempelajari perancangan, pembuatan,
                        dan perawatan mesin.
                    </h1>
                </div>
                <div class="card grid px-6 py-10 justify-center items-center bg-blue-50 rounded-lg shadow-lg">
                    <h1 class="text-xl md:text-xl font-semibold capitalize">teknik pengelasan🔥🧑‍🏭</h1>
                    <h1 class="md:text-base font-light capitalize">Jurusan TPL mempelajari teknik pengelasan,
                        fabrikasi, dan perawatan konstruksi.
                    </h1>
                </div>
            </div>
        </div>
        @include('component.footer')
    </div>
@endsection
