<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $produkAll = Produk::all()->count();
        $produkIsactive = Produk::where('status', 'Aktif')->get()->count();
        $userAll = User::where('usertype', 'user')->get()->count();
        $userIsactive = User::where([
            ['usertype', '=', 'user'],
            ['status', '=', 'Aktif'],
        ])->get()->count();
        $produks = Produk::orderBy('created_at', 'desc')->take(10)->get();

        return view('admin.layouts.content-main-dashboard', compact('produkAll', 'produkIsactive', 'userAll', 'userIsactive', 'produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
