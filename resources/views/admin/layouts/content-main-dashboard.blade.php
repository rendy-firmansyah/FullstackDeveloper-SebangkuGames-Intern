@extends('admin.dashboard')

@section('title', 'Dashboard')

@section('content')

<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                        Jumlah Produk
                        </h3>
                        <h1>
                        {{$produkAll}}
                        </h1>
                    </div>
                <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                        Jumlah User
                        </h3>
                        <h1>
                        {{$userAll}}
                        </h1>
                    </div>
                <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                        Jumlah Produk Aktif
                        </h3>
                        <h1>
                        {{$produkIsactive}}
                        </h1>
                    </div>
                <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                        Jumlah User Aktif
                        </h3>
                        <h1>
                        {{$userIsactive}}
                        </h1>
                    </div>
                <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Produk Terbaru --}}
    <div class="">
        <h1 class="font-bold text-xl">Daftar 10 Produk Terbaru</h1>
        <div class="card has-table mt-5">
            <div class="card-content">
              <table>
                <thead>
                <tr>
                  <th>No</th>
                  {{-- <th>Gambar Produk</th> --}}
                  <th>Nama</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($produks as $produk)                
                <tr>
                  <td data-label="No">{{$loop->iteration}}</td>
                  {{-- <td class="flex justify-center">
                    <div class="image w-14 h-auto">
                      <img src="{{asset('images/content/'. $produk->gambar_produk)}}" class="rounded-full">
                    </div>
                  </td> --}}
                  <td data-label="Nama">{{$produk->nama_produk}}</td>
                  <td data-label="Harga">Rp. {{$produk->harga}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</section>


@endsection