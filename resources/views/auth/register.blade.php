<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Toko Kelontong Murah</title>
    @vite('resources/css/app.css')
    @include('partials.style')
    
</head>
<body class="bg-color-pick1">
    <div class="login flex justify-center items-center min-h-screen py-14">
        <div class="relative flex flex-col space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Selamat Datang</span>
                <span class="font-light text-gray-400 mb-3">
                    Silahkan isi detail informasi anda untuk<br>mendaftar sebagai pengguna #kelontong.id
                </span>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="py-2">
                        <span class="mb-2 text-md">Nama</span>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="name" id="name" required autofocus autocomplete="name">
                    </div>
                    <div class="py-2">
                        <span class="mb-2 text-md">Nomor Telepon</span>
                        <input type="number" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="nomor_telepon" id="nomor_telepon" required autofocus autocomplete="nomor_telepon">
                    </div>
                    <div class="py-2">
                        <span class="mb-2 text-md">Email</span>
                        <input type="email" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="email" id="email" required autofocus autocomplete="email">
                    </div>
                    <div class="py-2">
                        <span class="mb-2 text-md">Password</span>
                        <input type="password" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="password" id="password" required autocomplete="new-password">
                    </div>
                    <div class="py-2 mb-3">
                        <span class="mb-2 text-md">Konfirmasi Password</span>
                        <input type="password" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="w-full bg-color-pick4 text-white p-2 rounded-lg mb-6 hover:bg-color-pick4hover">Daftar</button>
                </form>
                <div class="text-center text-gray=400">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-indigo-600 underline cursor-pointer">Login sekarang!</a>
                </div>
            </div>
            <div class="relative">
                <img src="{{asset('asset/image/kelontong.jpg')}}" alt="" class="w-[400px] h-full rounded-r-2xl md:block object-cover">
            </div>
        </div>
    </div>

    @include('partials.script')
</body>
</html>
