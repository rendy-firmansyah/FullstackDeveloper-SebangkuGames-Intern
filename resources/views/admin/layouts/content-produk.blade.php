@extends('admin.dashboard')

@section('title', 'Produk')

@section('content')

<section class="is-produk p-5">
    <header class="card-header">
      <p class="card-header-title">
        <span class="mdi mdi-package-variant mr-3"></span>
        Produk Jual
      </p>
    </header>
    
    <div class="mb-3">
        <a href="{{route('produk.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded --jb-modal" data-target="sample-modal-3" type="button">
            <span class="mdi mdi-plus"></span>
            Tambah Produk
        </a>
    </div>

    <div class="card has-table">
        <div class="card-content">
          <table>
            <thead>
            <tr>
              <th>No</th>
              <th>Gambar Produk</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($produks as $produk)                
            <tr>
              <td data-label="No">{{$loop->iteration}}</td>
              <td class="flex justify-center">
                <div class="image w-14 h-auto">
                  <img src="{{asset('images/content/'. $produk->gambar_produk)}}" class="rounded-full">
                </div>
              </td>
              <td data-label="Nama">{{$produk->nama_produk}}</td>
              <td data-label="Harga">Rp. {{$produk->harga}}</td>
              <td data-label="Status">
                @if($produk->status === 'Aktif')
                    <span class="px-2 py-1 text-green-800 bg-green-200 rounded-lg text-xs">
                        Aktif
                    </span>
                @elseif($produk->status === 'Non Aktif')
                    <span class="px-2 py-1 text-yellow-800 bg-yellow-200 rounded-lg text-xs">
                        Non-Aktif
                    </span>
                @endif
              </td>
              <td class="actions-cell">
                <div class="buttons right nowrap">
                  <a href="{{route('produk.edit', $produk->id)}}" class="button small bg-yellow-400 hover:bg-yellow-500">
                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                  </a>
                  <form action="{{route('produk.destroy', $produk->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="button small red" type="submit">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
</section>

@endsection