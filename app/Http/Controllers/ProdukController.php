<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::orderBy('created_at', 'desc')->get();
        return view('admin.layouts.content-produk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layouts.content-tambah-produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar_produk' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $produks = new Produk();
        $produks->nama_produk = $request->input('nama_produk');
        $produks->harga = $request->input('harga');
        if ($request->hasFile('gambar_produk'))
        {
            $gambar = $request->file('gambar_produk');
            $namaGambar = time(). '.' .$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $produks->gambar_produk = $namaGambar;
        }
        $produks->status = 'Aktif';

        $produks->save();

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('admin.layouts.content-edit-produk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar_produk' => 'image|mimes:png,jpg,jpeg'
        ]);

        $produk = Produk::find($id);
        $produk->nama_produk = $request->input('nama_produk');
        $produk->harga = $request->input('harga');
        if ($request->hasFile('gambar_produk'))
        {
            $gambar = $request->file('gambar_produk');
            $namaGambar = time(). '.' .$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $produk->gambar_produk = $namaGambar;
        }
        if ($request->has('status'))
        {
            $produk->status = $request->input('status');
        }

        $produk->save();

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return back();
    }

}
