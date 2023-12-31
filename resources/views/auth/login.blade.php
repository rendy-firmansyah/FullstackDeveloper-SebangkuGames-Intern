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
    <div class="login flex justify-center items-center min-h-screen">
        <div class="relative flex flex-col space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Selamat Datang</span>
                <span class="font-light text-gray-400 mb-3">
                    Selamat datang! Mohon masukkan detail informasi anda<br>untuk masuk ke dashboard #kelontong.id
                </span>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="py-4">
                        <span class="mb-2 text-md">Email</span>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="email" id="email" required autofocus autocomplete="username">
                    </div>
                    <div class="py-4">
                        <span class="mb-2 text-md">Password</span>
                        <input type="password" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="password" id="password" required autocomplete="current-password">
                    </div>
                    <div class="flex justify-between w-full py-4">
                        <div class="">
                            <input type="checkbox" name="remember" id="remember_me" class="mr-2">
                            <span class="text-md">Ingat saya</span>
                        </div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="font-semibold text-md cursor-pointer">Lupa Password?</a>
                        @endif
                    </div>
                    <button type="submit" class="w-full bg-color-pick4 text-white p-2 rounded-lg mb-6 hover:bg-color-pick4hover">Login</button>
                </form>
                <div class="text-center text-gray=400">
                    Belum mempunyai akun?
                    <a href="{{ route('register') }}" class="text-indigo-600 underline cursor-pointer">Daftar sekarang!</a>
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
