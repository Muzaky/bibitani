@extends('Layout.dinas_nav')
@section('content')
    <section>



        <div class="flex flex-col m-4 w-[100%]">
            <h1 class="text-[40px] font-semibold text-[#33765F] font-[Poppins] ">Pemberitahuan Informasi Bibit Horikultura
            </h1>
            <p class="text-[18px] font-normal text-[#9B9B9B] font-[Poppins] mt-[11px] text-wrap w-[1100px] leading-[25px]">
                Pada halaman ini akan membantu kamu dalam menambahkan pemberitahun, mengedit apabila diperlukan perubahan
                pada pemberitahuan, menghapus pemberitahuan dan memantau pemberitahuan yang telah ditambahkan</p>

            <a class="flex justify-center text-center items-center font-[Poppins] font-semibold text-[13px] bg-white rounded-[5px] text-[#33765F] mb-[22px] mt-5 w-[211px] h-[26px] btn btn-primary loading-button hover:text-white hover:bg-[#8BD7D2]"
                href="{{ route('berita.create') }}" id="myButton" onclick="startLoading()"><span class="flex">Tambah
                    Informasi
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
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-normal text-black  tracking-wider font-[Poppins]">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $val)
                        <tr>
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
                            <td class="tb-col tb-col-md px-6 py-4 flex gap-x-3">
                                <a href="{{ route('berita.edit', $val->id_informasi) }}" class="font-medium text-lg bg-transparent rounded-md border-t-2 border-l-2 border-b-4 border-r-4 border-green-600"><i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                      <path strokeLinecap="round" strokeLinejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                                    </svg>
                                    
                                  </svg>
                                  
                                  
                                  </i></a>
                                  <a href="{{ route('berita.destroy', $val->id_informasi) }}" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete?')) document.getElementById('delete-form').submit();" class="font-medium text-lg bg-transparent rounded-md border-t-2 border-l-2 border-b-4 border-r-4 border-red-600"><i>
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                  </svg>
                                  <form id="delete-form"
                                                        action="{{ route('berita.destroy', $val->id_informasi) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                  </i></a>
                    
                            
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>

            </div>


        </div>




    </section>
@endsection
