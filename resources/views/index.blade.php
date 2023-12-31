<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Toko Kelontong Murah</title>
    @include('partials.style')
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body class="bg-color-pick1">
    @include('partials.header-navbar')

    {{-- Section home --}}
    <section class="w-full min-h-screen flex justify-center items-center">
        <div class="px-36">
            <h1 class="text-5xl font-bold text-center mb-3">Toko Kelontong<span class="text-color-pick3">.id</span></h1>
            <h2 class="text-3xl font-semibold text-center mb-2">Tempat Terbaik untuk Keperluan Sehari-hari Anda!</h2>
            <p class="text-center">"Selamat datang di platform kami yang menghadirkan kemudahan dalam memenuhi kebutuhan sehari-hari Anda. Temukan kepraktisan berbelanja yang lebih dari sekadar transaksi – temukan kenyamanan, kualitas, dan kepuasan melalui pengalaman berbelanja bersama kami."</p>
            <div class="flex justify-center mt-3">
                <a href="{{route('view-produk')}}" class="px-5 py-3 bg-color-pick4 text-white">Cari kebutuhanmu ...</a>
            </div>
        </div>
    </section>

    {{-- Section tagline --}}
    <section class="w-full min-h-screen">
        <div class="pt-14">
            <h2 class="text-center text-base mb-3">Kelontong.id hadir untuk memenuhi kebutuhan anda secara nyata</h2>
            <h1 class="text-center text-4xl font-bold mb-4">Mulai belanja #bersamakelontong<span class="text-color-pick3">.id</span></h1>
            <div class="grid gap-4 md:grid-cols-3 px-16">
                <div class="max-w-md rounded-2xl overflow-hidden shadow-xl bg-color-pick1 border">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/image/Product quality-bro.png')}}" class="w-60 h-auto py-5" alt="">
                    </div>
                    <div class="px-4 py-6">
                        <div class="px-10">
                            <div class="font-bold text-xl mb-2 text-center">100 % Terpercaya</div>
                            <p class="text-gray-700 text-base text-center">
                                Dengan prinsip 100% terpercaya sebagai landasan, kami memastikan bahwa setiap langkah dalam menyajikan layanan produk kami disertai dengan standar yang ketat dalam hal kualitas, kejujuran, dan kepuasan pelanggan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-md rounded-2xl overflow-hidden shadow-xl bg-color-pick1 border">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/image/Bath bomb-amico.png')}}" class="w-60 h-auto py-5" alt="">
                    </div>
                    <div class="px-4 py-6">
                        <div class="px-10">
                            <div class="font-bold text-xl mb-2 text-center">Barang Terjamin</div>
                            <p class="text-gray-700 text-base text-center">
                                Kami bekerja sama dengan penyedia terpercaya dan memperhatikan setiap detail, mulai dari bahan baku hingga tahap produksi, demi memastikan bahwa setiap barang yang kami tawarkan adalah produk yang terjamin keasliannya, berkualitas, dan memenuhi standar yang telah ditetapkan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="max-w-md rounded-2xl overflow-hidden shadow-xl bg-color-pick1 border">
                    <div class="flex justify-center">
                        <img src="{{asset('asset/image/In no time-cuate.png')}}" class="w-60 h-auto py-5" alt="">
                    </div>
                    <div class="px-4 py-6">
                        <div class="px-10">
                            <div class="font-bold text-xl mb-2 text-center">Belanja Lebih Mudah</div>
                            <p class="text-gray-700 text-base text-center">
                                Dengan antarmuka yang ramah pengguna dan navigasi yang jelas, kami memastikan bahwa setiap langkah dalam proses berbelanja di layanan produk kami memberikan kenyamanan tanpa hambatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section produk aktif terbaru --}}
    <section class="w-full h-auto">
        <div class="pt-14">
            <h1 class="text-center font-bold text-3xl">Barang Jualan</h1>
            <p class="text-center mt-4">Belanja mulai sekarang .....!</p>
            <div class="mt-14">
                <div class="px-10 flex justify-center">
                    <form action="{{route('search-produk')}}" method="GET">
                        @csrf
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md">
                            <input type="search" name="search" id="search" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 mx-3" placeholder="cari barang...">
                            <button type="submit" class="px-3 py-1.5 bg-color-pick4 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2">Cari</button>
                        </div>
                    </form>
                </div>
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
                                        @if (auth()->user()->approve === 'approved')                                            
                                            <form action="{{route('detail-transaksi')}}" method="POST">
                                                @csrf
                                                <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                    </svg><span class="text-xs mx-2">Tambah Keranjang</span>                            
                                                </button>
                                            </form>
                                            <form action="{{route('detail-transaksi')}}" method="POST">
                                                @csrf
                                                <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                    </svg><span class="text-xs mx-2">Beli Sekarang</span>
                                                </button>
                                            </form>                               
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
                            <h1 class="font-bold">Tidak ada hasil pencarian "{{$keyword}}"</h1>
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
                                    @if (auth()->user()->approve === 'approved')                                        
                                        <form action="{{route('detail-transaksi')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                </svg><span class="text-xs mx-2">Tambah Keranjang</span>                            
                                            </button>
                                        </form>
                                        <form action="{{route('detail-transaksi')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="px-5 py-2 bg-color-pick4 text-white rounded-full flex justify-center items-center my-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                </svg><span class="text-xs mx-2">Beli Sekarang</span>
                                            </button>
                                        </form>                               
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

    {{-- Section ulasan --}}
    <section class="w-full min-h-screen pt-10">
        <h1 class="text-2xl font-bold text-center pt-14">Kata Pelanggan Kelontong<span class="text-color-pick3">.id</span></h1>
        <div class="mt-8">
            <div class="owl-carousel owl-theme px-20 -z-10">
                <div class="item">
                    <div class="card flex justify-center items-center h-full px-36 border rounded-2xl py-10 bg-white shadow-lg">
                        <div class="w-96">
                            <img src="{{asset('asset/image/Status update-amico.png')}}" class="" alt="">
                        </div>
                        <div class="ulasan px-10">
                            <p class="italic">"Baru beli pertama kali. Awalnya ragu dan tanya-tanya ke CS-nya. Ternyata sebaik itu CS dari produk ini. Alhamdulillah, setelah beli nggak nyesel"</p> 
                            <p class="font-bold mt-3">Kata Ira setiawan</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card flex justify-center items-center h-full px-36 border rounded-2xl py-10 bg-white shadow-lg">
                        <div class="w-96">
                            <img src="{{asset('asset/image/Status update-amico.png')}}" class="" alt="">
                        </div>
                        <div class="ulasan px-10">
                            <p class="italic">"Baru beli pertama kali. Awalnya ragu dan tanya-tanya ke CS-nya. Ternyata sebaik itu CS dari produk ini. Alhamdulillah, setelah beli nggak nyesel"</p> 
                            <p class="font-bold mt-3">Kata Pak Surahman</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card flex justify-center items-center h-full px-36 border rounded-2xl py-10 bg-white shadow-lg">
                        <div class="w-96">
                            <img src="{{asset('asset/image/Status update-amico.png')}}" class="" alt="">
                        </div>
                        <div class="ulasan px-10">
                            <p class="italic">"Baru beli pertama kali. Awalnya ragu dan tanya-tanya ke CS-nya. Ternyata sebaik itu CS dari produk ini. Alhamdulillah, setelah beli nggak nyesel"</p> 
                            <p class="font-bold mt-3">Kata Bu Murti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.footer')
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @include('partials.script')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>