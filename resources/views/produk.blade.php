<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Kelontong Murah</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @include('partials.style')
</head>
<body class="bg-color-pick1">
    @include('partials.header-navbar')

    <section class="w-full min-h-screen">
        <div class="pt-24">
            <h1 class="font-bold text-3xl pl-16">Temukan keperluanmu <span class="text-color-pick3">disini</span></h1>
            <div class="pl-16 mt-5 flex">
                <form action="{{route('view-produk')}}" method="GET">
                    @csrf
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md">
                        <input type="search" name="search" id="search" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 mx-3" placeholder="cari barang...">
                        <button type="submit" class="px-3 py-1.5 bg-color-pick4 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2">Cari</button>
                    </div>
                </form>
            </div>
            <div class="mt-5">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-rows-1 gap-10 px-10 py-9">
                    @if (isset($searchProduk))
                        @forelse ($searchProduk as $item)                            
                            <div class="border px-10 py-5 shadow-lg rounded-2xl max-w-md">
                                <div class="flex justify-center">
                                    <img src="{{asset('images/content/'. $item->gambar_produk)}}" class="w-20 h-auto" alt="">
                                </div>
                                <h2 class="font-semibold mt-4 text-center">{{$item->nama_produk}}</h2>
                                <p class="text-sm text-center">Harga : Rp. {{$item->harga}}</p>
                                <div class="grid grid-rows-2 mt-4">
                                    @auth
                                        @if(auth()->user()->approve === 'approved') 
                                            <a href="{{route('detail-transaksi')}}">
                                                @csrf
                                                <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full add">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                    </svg><span class="text-xs mx-2">Tambah Keranjang</span>                            
                                                </button>
                                            </a>
                                            <a href="{{route('detail-transaksi')}}">
                                                @csrf
                                                <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full add">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                    </svg><span class="text-xs mx-2">Beli Sekarang</span>
                                                </button>
                                            </a>  
                                        @elseif (auth()->user()->approve === 'rejected')
                                            <div class="text-red-500 text-center">
                                                Anda tidak dapat melakukan pembelian kerena akun anda berstatus rejected.
                                            </div>
                                            <div class="text-red-500 text-center">
                                                Silakan hubungi admin untuk informasi lebih lanjut. <a href="https://wa.me/6285648408330" class="underline text-blue-700">klik disini</a>
                                            </div>
                                        @endif                             
                                    @else
                                        <a href="{{ route('login') }}" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg><span class="text-xs mx-2">Tambah Keranjang</span>                            
                                        </a>
                                        <a href="{{ route('login') }}" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg><span class="text-xs mx-2">Beli Sekarang</span>
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        @empty
                            <div class="lg:col-span-4 md:col-span-2">
                                <h1 class="pl-5 font-bold text-3xl">Tidak ada hasil pencarian "{{$keyword}}..."</h1>
                            </div>
                        @endforelse                       
                    @else
                        @foreach ($produk as $item)                        
                        <div class="border px-10 py-5 shadow-lg rounded-2xl max-w-md">
                            <div class="flex justify-center">
                                <img src="{{asset('images/content/'. $item->gambar_produk)}}" class="w-20 h-auto" alt="">
                            </div>
                            <h2 class="font-semibold mt-4 text-center">{{$item->nama_produk}}</h2>
                            <p class="text-sm text-center">Harga : Rp. {{$item->harga}}</p>
                            <div class="grid grid-rows-2 mt-4">
                                @auth
                                    @if(auth()->user()->approve === 'approved')                                
                                        <a href="{{route('detail-transaksi')}}">
                                            @csrf
                                            <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                </svg><span class="text-xs mx-2">Tambah Keranjang</span>                            
                                            </button>
                                        </a>
                                        <a href="{{route('detail-transaksi')}}">
                                            @csrf
                                            <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                </svg><span class="text-xs mx-2">Beli Sekarang</span>
                                            </button>
                                        </a>
                                    @elseif (auth()->user()->approve === 'rejected')
                                        <div class="text-red-500 text-center">
                                            Anda tidak dapat melakukan pembelian kerena akun anda berstatus rejected.
                                        </div>
                                        <div class="text-red-500 text-center">
                                            Silakan hubungi admin untuk informasi lebih lanjut. <a href="https://wa.me/6285648408330" class="underline text-blue-700">klik disini</a>
                                        </div>
                                    @endif
                                @else
                                    <a href="{{ route('login') }}" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                        </svg><span class="text-xs mx-2">Tambah Keranjang</span>                            
                                    </a>
                                    <a href="{{ route('login') }}" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                        </svg><span class="text-xs mx-2">Beli Sekarang</span>
                                    </a>
                                @endauth
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('partials.script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
