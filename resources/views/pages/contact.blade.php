@extends('template')
@section('konten')
    <div class="main w-full">
        @include('component.navbar')
        <div class="contact w-full flex flex-col p-10 max-md:mt-24 gap-4">
            <div class="info flex flex-col text-center justify-center items-center gap-2">
                <h1 class="text-5xl font-semibold">Ada masukan? 🤔 Segera hubungi kita yaa! 📞✨ </h1>
                <h1 class="md:text-2xl text-xl lg:w-8/12"> Jika ada masukan, keluhan, atau pertanyaan 💬❓ bisa contact kita
                    melalui form ini 📝👇.</h1>
            </div>
            <div class="form w-full grid grid-cols-1 md:grid-cols-2 lg:p-10 p-5 gap-4 my-6 bg-blue-50 shadow-lg rounded-xl">
                <div class="map w-full flex justify-center items-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2654286568495!2d106.95414807482916!3d-6.2286949937594205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMK%20NEGERI%201%20KOTA%20BEKASI!5e0!3m2!1sid!2sid!4v1735527224532!5m2!1sid!2sid"
                        width="900" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-xl max-lg:hidden"></iframe>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2654286568495!2d106.95414807482916!3d-6.2286949937594205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMK%20NEGERI%201%20KOTA%20BEKASI!5e0!3m2!1sid!2sid!4v1735527224532!5m2!1sid!2sid"
                        width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="roundedxlg lg:hidden"></iframe>
                </div>
                <form action="{{ route('contact.tambah') }}" method="POST" class="mt-4 flex flex-col p-4 gap-4 md:px-20">
                    {{-- @include('component.eror') --}}
                    @csrf
                    <h1 class="text-3xl font-semibold capitalize">hubungi kami</h1>
                    <input type="text" name="nama" id="nama" class="border-2 border-gray-300 px-4 py-2 capitalize text-xl rounded-xl"
                        placeholder="nama">
                    <input type="email" name="email" id="email" class="border-2 border-gray-300 px-4 py-2 capitalize text-xl rounded-xl"
                        placeholder="email">
                    <input type="text" name="pesan" id="pesan" class="border-2 border-gray-300 px-4 py-2 capitalize text-xl rounded-xl"
                        placeholder="pesan">
                    <button type="submit"
                        class="text-2xl font-semibold text-white py-2 rounded-xl bg-blue-500 hover:bg-blue-700">kirim</button>
                </form>
            </div>
        </div>
        @include('component.footer')
    </div>
@endsection
