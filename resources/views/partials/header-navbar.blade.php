@auth
    @if(auth()->user()->usertype === 'user')
        <nav class="fixed top-0 left-0 w-full shadow bg-color-pick1">
            <div class="container m-auto flex justify-between items-center">
                <a href="/" class="pl-8 py-4 text-xl font-bold cursor-pointer">Kelontong<span class="text-color-pick3">.id</span></a>
                <ul class="hidden md:flex items-center pr-10 text-base cursor-pointer">
                    <a href="{{route('index.beranda')}}"><li class="hover:bg-color-pick4 hover:text-white py-4 px-6 duration-300 transition-all">Beranda</li></a>
                    <a href="{{route('index.tentang')}}"><li class="hover:bg-color-pick4 hover:text-white py-4 px-6 duration-300 transition-all">Tentang Kami</li></a>
                    <a href="{{route('view-produk')}}"><li class="hover:bg-color-pick4 hover:text-white py-4 px-6 duration-300 transition-all">Produk</li></a>
                </ul>
                <div class="flex gap-5 pr-8 relative items-center">
                    <div class="border rounded bg-color-pick4 text-color-pick1 hover:bg-color-pick4hover cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                          </svg>                          
                    </div>
                    <label for="dropdown-toggle" class="relative inline-block text-left">
                        <span class="flex items-center cursor-pointer">
                            {{ Auth::user()->name }}
                            <svg class="h-5 w-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="checkbox" id="dropdown-toggle" class="hidden" />
                        <div class="origin-top-right absolute right-0 mt-2 w-48 bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg z-10 hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Log Out</button>
                            </form>
                        </div>
                    </label>
                </div>                                            
                <button id="navbarToggle" class="block md:hidden py-3 px-4 mx-2 rounded group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path class="toggle-icon-path1" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>
                    <div class="absolute top-[100%] -right-full h-screen w-8/12 border opacity-0 bg-color-pick1 transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                        <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                            <a href="{{route('index.beranda')}}"><li class="hover:bg-color-pick3 py-4 px-6 w-full">Beranda</li></a>
                            <a href="{{route('index.tentang')}}"><li class="hover:bg-color-pick3 py-4 px-6 w-full">Tentang Kami</li></a>
                            <a href="{{route('view-produk')}}"><li class="hover:bg-color-pick3 py-4 px-6 w-full">Produk</li></a>
                        </ul>
                    </div>                  
                </button>
            </div>
        </nav>
    @endif
@else
    <nav class="fixed top-0 left-0 w-full shadow bg-color-pick1">
        <div class="container m-auto flex justify-between items-center">
            <a href="/" class="pl-8 py-4 text-xl font-bold cursor-pointer">Kelontong<span class="text-color-pick3">.id</span></a>
            <ul class="hidden md:flex items-center pr-10 text-base cursor-pointer">
                <a href="{{route('index.beranda')}}"><li class="hover:bg-color-pick4 hover:text-white py-4 px-6 duration-300 transition-all">Beranda</li></a>
                <a href="{{route('index.tentang')}}"><li class="hover:bg-color-pick4 hover:text-white py-4 px-6 duration-300 transition-all">Tentang Kami</li></a>
                <a href="{{route('view-produk')}}"><li class="hover:bg-color-pick4 hover:text-white py-4 px-6 duration-300 transition-all">Produk</li></a>
            </ul>
            <div class="flex gap-5 pr-8">
                <a href="{{route('register')}}" class="px-4 py-2 flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    Daftar</a>
                <a href="{{route('login')}}" class="px-4 py-2 bg-color-pick4 rounded-full text-white">Login</a>
            </div>
            <button id="navbarToggle" class="block md:hidden py-3 px-4 mx-2 rounded group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path class="toggle-icon-path1" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
                <div class="absolute top-[100%] -right-full h-screen w-8/12 border opacity-0 bg-color-pick1 transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                    <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                        <a href="{{route('index.beranda')}}"><li class="hover:bg-color-pick3 py-4 px-6 w-full">Beranda</li></a>
                        <a href="{{route('index.tentang')}}"><li class="hover:bg-color-pick3 py-4 px-6 w-full">Tentang Kami</li></a>
                        <a href="{{route('view-produk')}}"><li class="hover:bg-color-pick3 py-4 px-6 w-full">Produk</li></a>
                    </ul>
                </div>                  
            </button>
        </div>
    </nav>
@endauth