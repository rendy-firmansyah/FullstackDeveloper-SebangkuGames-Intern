<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexBeranda() {
        $produk = Produk::where('status', 'Aktif')->orderBy('created_at', 'desc')->paginate(8);
        return view('index', compact('produk'));
    }
    public function indexTentangKami() {
        return view('tentang-kami');
    }
    public function indexProduk(Request $request) {
        $produk = Produk::where('status', 'Aktif')->get();

        $searchProduk = null;
        $keyword = null;
        if($request->has('search')) {
            $keyword = $request->search;
            $searchProduk = Produk::where('nama_produk','LIKE','%'.$keyword.'%')->get();
        }

        return view('produk', compact('produk', 'searchProduk', 'keyword'));
    }
    public function detailTransaksi() {
        return view('detail-transaksi');
    }
    public function search(Request $request) {
        if($request->has('search')) {
            $keyword = $request->search;
            $searchProduk = Produk::where('nama_produk','LIKE','%'.$keyword.'%')->get();
        }
        else {
            $searchProduk = Produk::paginate(8);
        }

        return view('index', compact('searchProduk', 'keyword'));
    }

    // Authentication User Pengguna Kelontong.id ---------------------------------------------------------------------------------
    
}
