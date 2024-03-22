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

    public function create()
    {
        return view('Berita.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|file|mimes:pdf,jpg,jpeg,svg,png',
        ]);
        if ($request->hasFile('gambar')){
            $imagePath = $request->file('gambar')->store('berita', 'public');
            $validatedData['gambar'] = $imagePath;
        }
        MBerita::create($validatedData);
        return redirect()->route('berita.list');
    }

    public function edit(Request $request, $id_berita)
    {
        $data = MBerita::getById($id_berita);
        // dd($data);
        return view(
            'Berita.edit',
            compact('data')
        );
    }
    public function update(Request $request, $id_berita)
    {
        $validatedData = $request->validate([
            'judul',
            'isi',
            'gambar',
        ]);
        $update = MBerita::getById($id_berita);
        $update->update($validatedData);
        return redirect()->route('berita.list')
            ->with('success', 'Berita telah terpost');
    }
    public function destroy($id_berita)
    {
        $destroy = MBerita::getById($id_berita);
        $destroy->delete();
        return redirect()->route('berita.list')
            ->with('success','Berita telah didelete');
    }
}