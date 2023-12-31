<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Toko Kelontong Murah</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @include('partials.style')
    
</head>
<body class="bg-color-pick1">
    @include('partials.header-navbar')

    <section class="w-full min-h-screen flex items-center justify-center">
        <div class="max-w-screen-lg mx-auto grid lg:grid-cols-2 gap-4">
            <div>
                <img src="{{asset('asset/image/kelontong.jpg')}}" class="w-full h-auto rounded-bl-3xl rounded-tr-3xl" alt="">
            </div>
    
            <div class="flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold mb-4">Awal perjalanan kami #kelontong<span class="text-color-pick3">.id</span></h1>
                <p class="text-sm text-gray-600">
                    Sejak langkah pertama kami dijalani, #kelontong.id lahir dengan tekad untuk memberikan yang terbaik dalam dunia belanja daring. Awal perjalanan ini merupakan sebuah kisah tentang dedikasi kami untuk memberikan pengalaman berbelanja yang tak tertandingi kepada pelanggan kami. #kelontong.id bukan hanya tentang produk, tetapi tentang kepercayaan, kenyamanan, dan kepuasan. Mari bersama-sama merayakan setiap langkah perjalanan ini yang kami tempuh bersama Anda.
                </p>
                <button class="border bg-color-pick4 mt-3 py-3 rounded-md text-white hover:bg-color-pick4hover transition-all duration-200">Hubungi admin kami....</button>
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