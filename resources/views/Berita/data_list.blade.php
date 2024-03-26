@extends('Layout.dinas_nav')
@section('content')

<section>
    


    <div class="m-4">
        <h1 class="text-xl font-semibold text-gray-900">Informasi Table</h1>
        <div class="mt-4 overflow-x-auto">
            <li><a class="btn btn-primary loading-button" href="{{ route('berita.create') }}" id="myButton" onclick="startLoading()"><span>Tambah</span></a></li>

            <table class="table-auto min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID Informasi</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Judul Informasi</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama Bibit</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gambar Informasi</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Awal</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Akhir</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jumlah Bibit</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Syarat Ketentuan</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Narahubung</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no= 1; ?>
                    @foreach ($data as $val)
                    <td class="tb-col tb-col-sm">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $no++ }}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->judul_informasi}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->nama_bibit}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->gambar_informasi}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->tgl_awal}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->tgl_akhir}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->jumlah_bibit}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->syarat_ketentuan}}</div>
                    </td>
                    <td  class="tb-col tb-col-md">
                        <div class=" px-2 py-1 fs-6 lh-sm">{{ $val->kontak_narahubung}}</div>
                    </td>
                    
                    @endforeach
                    
                </tbody>
                        


</section>

@endsection