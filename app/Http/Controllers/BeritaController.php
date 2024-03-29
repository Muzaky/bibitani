<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{


    public function landing()
    {
        $data = MBerita::getData()->paginate(10);
        //return json_encode($data);
        return view(
            'Berita.landingberita',
            ['data' => $data]
        );
    }
    public function index()
    {
        $data = MBerita::getData()->paginate(10);
        //return json_encode($data);
        return view(
            'Berita.data_list',
            ['data' => $data]
        );
    }

    // public function show()

    public function create()
    {
        return view('Berita.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_informasi' => 'required',
            'nama_bibit' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
            'jumlah_bibit' => 'required',
            'syarat_ketentuan' => 'required',
            'kontak_narahubung' => 'required',
            'gambar_informasi' => 'nullable|file|mimes:pdf,jpg,jpeg,svg,png',
        ]);
        if ($request->hasFile('gambar_informasi')){
            $imagePath = $request->file('gambar_informasi')->store('informasi', 'public');
            $validatedData['gambar_informasi'] = $imagePath;
        }
        MBerita::create($validatedData);
        return redirect()->route('berita.list');
    }

    public function edit(Request $request, $id_informasi)
    {
        $data = MBerita::getById($id_informasi);
        // dd($data);
        return view(
            'Berita.edit',
            compact('data')
        );
    }
    public function update(Request $request, $id_informasi)
    {
        $validatedData = $request->validate([
            'judul',
            'isi',
            'gambar',
        ]);
        $update = MBerita::getById($id_informasi);
        $update->update($validatedData);
        return redirect()->route('berita.list')
            ->with('success', 'Berita telah terpost');
    }
    public function destroy($id_informasi)
    {
        $destroy = MBerita::getById($id_informasi);
        $destroy->delete();
        return redirect()->route('berita.list')
            ->with('success','Berita telah didelete');
    }

    
}