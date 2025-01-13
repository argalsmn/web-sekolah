@extends('template')
@section('konten')
    <div class="bg-gray-100 alumni flex capitalize">
        <!-- alumni Menu -->
        <div class="bg-gray-100 w-2/12 h-screen max-sm:hidden items-center justify-center text-center">
            <a href="{{ url('/alumni') }}">
                <div class="mt-14 font-bold text-4xl">dashboard</div>
                {{-- <img src="{{ asset('aset/') }}" alt="" class="my-10 mx-6 mt-16 w-20"> --}}
            </a>
            <div class="list gap-2 justify-center items-center m-6 border-b-2">
                <a href="{{ url('/dashboard') }}">
                    <div class="bg-white px-4 py-1 shadow text-left my-4 rounded-lg">
                        <i class="bi bi-person-lines-fill"></i>
                        data alumni
                    </div>
                </a>
                <a href="{{ url('/dashboard/contact') }}">
                    <div class="hover:bg-white px-4 py-1 hover:shadow text-left my-4 rounded-lg">
                        <i class="bi bi-box-arrow-in-down"></i>
                        masukan
                    </div>
                </a>
            </div>
            <a href="{{ url('/') }}">
                <div class="logout">
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white font-bold px-6 py-1 shadow rounded-lg">logout</button>
                </div>
            </a>
        </div>
        <!-- alumni Menu end -->

        <!-- Main alumni -->
        <div class="main-alumni w-10/12 h-screen max-sm:w-full bg-white rounded-3xl">

            <!-- Navbar -->
            @include('component.navbar-admin')
            <!-- Navbar end -->

            <!-- alumni field -->
            @include('component.tambah-alumni')

            <div class="form p-4">
                <table action="" class="alumni text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <tr>
                            <th class="font-bold border-2 py-1">no</th>
                            <th class="font-bold border-2 py-1">id_alumni</th>
                            <th class="font-bold border-2 py-1">universitas</th>
                            <th class="font-bold border-2 py-1">nama</th>
                            <th class="font-bold border-2 py-1">jurusan</th>
                            <th colspan="1" class="font-bold border-2 py-1">Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="data" class="data mt-28">
                        @foreach ($alumni as $item)
                        <tr>
                                <td class="border-2 py-1">{{ $loop->iteration }}</td>
                                <td class="border-2 py-1">{{ $item->id_alumni }}</td>
                                <td class="border-2 py-1">{{ $item->universitas }}</td>
                                <td class="border-2 py-1">{{ $item->nama }}</td>
                                <td class="border-2 py-1">{{ $item->jurusan }}</td>
                                <td class="flex">
                                    {{-- <div class="w-full">
                                        @include('component.btn-edit-alumni')
                                    </div> --}}
                                    <div class="w-full">
                                        @include('component.btn-hapus-alumni')
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                <div class="pagination">
                    {{ $alumni->links('') }}
                </div>
            </div>
            <!-- alumni field end -->
        </div>
        <!-- Main alumni end -->
    </div>
@endsection
