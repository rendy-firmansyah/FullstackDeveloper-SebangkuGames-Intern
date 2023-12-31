@extends('admin.dashboard')

@section('title', 'Produk')

@section('content')

<section class="is-add-produk p-5">
    <header class="card-header">
        <p class="card-header-title">
          <span class="mdi mdi-package-variant mr-3"></span>
          Tambah Produk
        </p>
      </header>

    <div class="mb-3">
        <a href="{{route('produk.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded --jb-modal" data-target="sample-modal-3" type="button">
            <span class="mdi mdi-arrow-left"></span>
            Kembali
        </a>
    </div>

    <section class="modal-card-body">
        <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-1 mb-3">
            <label for="nama_produk" class="block text-sm font-medium leading-6 text-gray-900">Nama Produk</label>
            <div class="mt-2">
            <input id="nama_produk" name="nama_produk" type="text" autocomplete="nama_produk" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="input-2 mb-3">
            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                </svg>
                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="gambar_produk" type="file" class="sr-only" onchange="displayFileName()">
                </label>
                <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                <span id="uploaded-file-name" class="text-sm text-gray-900"></span>
            </div>
            </div>
        </div>
        <div class="input-3">
            <label for="harga" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
            <div class="mt-2">
            <input id="harga" name="harga" type="number" autocomplete="harga" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <button type="submit" class="py-3 w-full text-white border bg-blue-500 hover:bg-blue-700 rounded-lg mt-4">Submit</button>
        </form>
    </section>
</section>

@endsection