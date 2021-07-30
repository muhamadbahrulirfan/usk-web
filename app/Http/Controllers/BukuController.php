<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{

    public function index()
    {
        $buku = Buku::latest()->paginate(8);
        return view('buku.index', compact('buku'));
    }

    public function create()
    {

        return view('buku.create');
    }


    public function store(Request $request)
    {
        $tambah = new Buku;
        $gambar = $request->file('gambar');
        $ext = $gambar->getClientOriginalExtension();
        $newName = uniqid() . "." . $ext;
        $gambar->move('images', $newName);

        $tambah->judul = $request->input('judul');
        $tambah->deskripsi = $request->input('deskripsi');
        $tambah->gambar = $newName;
        $tambah->pengarang = $request->input('pengarang');
        $tambah->penerbit = $request->input('penerbit');
        $tambah->persediaan = $request->input('persediaan');
        $tambah->save();

        return redirect('/buku')->with('status', 'Buku Berhasil Ditambah');
    }


    public function show($id)
    {
        $detail = Buku::findOrFail($id);
        return view('buku.detail', compact('detail'));
    }


    public function edit($id)
    {
        $edit = Buku::where('id_buku', $id)->get();
        return view('buku.edit', compact('edit'));
    }


    public function update(Request $request, $id)
    {
        $update = Buku::findOrFail($id);
        $update->judul = $request->input('judul');
        $update->deskripsi = $request->input('deskripsi');
        $update->pengarang = $request->input('pengarang');
        $update->penerbit = $request->input('penerbit');
        $update->persediaan = $request->input('persediaan');

        if ($request->hasFile('gambar')) {
            Storage::delete('public/images/' . $update->gambar);
            $gambar = $request->file('gambar');
            $ext = $gambar->getClientOriginalExtension();
            $newName = uniqid() . "." . $ext;
            $gambar->move('images', $newName);
            $update->gambar = $newName;
        }

        $update->update();
        return redirect('/buku')->with('status', 'Buku Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $delete = Buku::findOrFail($id);
        $delete->delete();
        return redirect('/buku')->with('status', 'Buku Berhasil Di Hapus');
    }

    public function search(Request $request)
    {
        $search = $request->cari;
        $buku = Buku::where('judul', 'like', "%" . $search . "%")->paginate();
        return view('buku.index', compact('buku'));
    }
}
