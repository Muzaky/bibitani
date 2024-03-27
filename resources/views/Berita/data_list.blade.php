@extends('Layout.dinas_nav')
@section('content')
    <section>



        <div class="flex flex-col m-4 w-[100%]">
            <h1 class="text-[40px] font-semibold text-[#33765F] font-[Poppins] ">Pemberitahuan Informasi Bibit Horikultura</h1>
            <p class="text-[18px] font-normal text-[#9B9B9B] font-[Poppins] mt-[11px] text-wrap w-[1100px] leading-[25px]">
                Pada halaman ini akan membantu kamu dalam menambahkan pemberitahun, mengedit apabila diperlukan perubahan
                pada pemberitahuan, menghapus pemberitahuan dan memantau pemberitahuan yang telah ditambahkan</p>

            <a class="flex justify-center text-center items-center font-[Poppins] font-semibold text-[13px] bg-white rounded-[5px] text-[#33765F] mb-[22px] mt-5 w-[211px] h-[26px] btn btn-primary loading-button hover:text-white hover:bg-[#8BD7D2]"
                href="{{ route('berita.create') }}" id="myButton" onclick="startLoading()"><span class="flex">Tambah Informasi
                    Baru</span></a>
            <div class="flex flex-col overflow-x-auto">

                <table class="table-auto min-w-full divide-y divide-gray-200">
                    <thead class="bg-white">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                No</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Judul Informasi</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Nama Bibit</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Gambar Informasi</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Tanggal Awal</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Tanggal Akhir</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Jumlah Bibit</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Syarat Ketentuan</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Narahubung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $val)
                            <td class="tb-col tb-col-sm">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $no++ }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->judul_informasi }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->nama_bibit }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->gambar_informasi }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->tgl_awal }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->tgl_akhir }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->jumlah_bibit }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->syarat_ketentuan }}</div>
                            </td>
                            <td class="tb-col tb-col-md">
                                <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->kontak_narahubung }}</div>
                            </td>
                        @endforeach

                    </tbody>



    </section>
@endsection
