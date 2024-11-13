<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <title>
        @yield('title', 'Cool Link - كول لينكس')</title>
    <!-- Scripts -->



    <link rel="shortcut icon" href="{{asset("statics/logo.png")}}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customScroll.css') }}">


    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('build/assets/app-BCAh5zKI.css')}}" />
    <script src="{{asset('build/assets/app-BjCBnTiP.js')}}"></script>

<!-- 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css') -->
    <!-- GSAP and ScrollTrigger Scripts -->

</head>

<body class="antialiased rtl">

    <!-- خلفية متحركة -->
    <header class="h-16 flex items-center w-full fixed top-0 z-50 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <a href="/" class="uppercase text-gray-800 dark:text-white font-black text-3xl">
                <img src="./statics/logo.png" alt="cool links">
            </a>
            <div class="flex items-center">
                <!-- Menu for large screens -->
                <nav class="text-gray-800 uppercase text-lg lg:flex items-center hidden" id="menu">
                    <a href="/" class="py-2 px-6 flex">
                        الرئيسية
                    </a>
                    <a href="/contact" class="py-2 px-6 flex">
                        تواصل معنا
                    </a>
                    <a href="/#how-to-use" class="py-2 px-6 flex">
                        كيفة الاستخدام
                    </a>
                    <span href="#" class="w-40"></span>

                    @auth
                        <a href="{{ route('profile') }}" class="flex gap-2 justify-center items-center ltr">
                            <span title="{{ auth()->user()->name }}"
                                class="mx-auto flex justify-center w-[50px] h-[50px] bg-white rounded-full bg-cover bg-center bg-no-repeat"
                                style="background-image: url('{{ auth()->user()->image ?? asset('statics/profile.svg') }}');">
                            </span>
                        </a>
                    @else
                        <a href="/login" class="py-2 px-6 flex">
                            سجيل الدخول
                        </a>
                    @endauth
                </nav>

                <!-- Mobile menu button -->
                <button class="lg:hidden flex flex-col ml-4" id="menu-btn" onclick="toggleMenu()">
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1"></span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1"></span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1"></span>
                </button>
            </div>
        </div>

        <!-- Mobile menu overlay -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-gray-800 bg-opacity-90 text-white flex flex-col p-8 transform translate-x-full transition-transform duration-300 lg:hidden">
            <div class="flex justify-between items-center mb-4">
                <!-- Logo or title on the right (optional) -->
                <span></span>
                <!-- Close button on the left -->
                <button onclick="toggleMenu()" class="text-4xl">
                    &times;
                </button>

            </div>

            <!-- Menu items aligned to the right -->
            <div class="flex flex-col items-start border-r-2 border-blue-600">
                <a href="/" class="my_link py-2 px-6 text-lg mt-4">
                    الرئيسية
                </a>
                <a href="/contact" class="my_link py-2 px-6 text-lg mt-4">
                    تواصل معنا
                </a>
                <a href="/#how-to-use" class="my_link py-2 px-6 text-lg mt-4">
                    كيفة الاستخدام
                </a>

                @auth
                    <a href="{{ route('profile') }}" class="my_link py-2 px-6 text-lg flex items-center gap-2 mt-10">
                        <span title="{{ auth()->user()->name }}"
                            class="w-[50px] h-[50px] bg-white rounded-full bg-cover bg-center bg-no-repeat"
                            style="background-image: url('{{ auth()->user()->image ?? asset('statics/profile.svg') }}');">
                        </span>
                        {{ auth()->user()->name }}
                    </a>
                @else
                    <a href="/login" class="my_link py-2 px-6 text-lg">
                        سجيل الدخول
                    </a>
                @endauth
            </div>
        </div>
    </header>



    <!-- Main Content -->
    @yield('content')


    {{-- fooooooter --}}
    <!-- القسم الأخير (الدعوة للإجراء) -->
    <footer class="bg-gray-800 text-white py-4 flex flex-wrap
           items-center justify-evenly
           ">

        <section class="py-16 bg-gray-800 text-white text-center rtl px-2">
            <h2 class="text-3xl font-semibold mb-4">اشترك في النشرة البريدية</h2>
            <p class="text-lg mb-6">احصل على آخر التحديثات والعروض الخاصة مباشرة في بريدك الإلكتروني.</p>
            <form class="flex justify-center gap-4">
                <input type="email" placeholder="أدخل بريدك الإلكتروني" class="px-4 w-full py-2 rounded-lg w-1/3"
                    required>
                <button type="submit"
                    class="bg-blue-600 py-2 px-4 rounded-lg hover:bg-blue-700 transition">اشترك</button>
            </form>
        </section>


        <div class="text-center">


            <p class="text-lg font-semibold">ابدأ في إنشاء صفحتك اليوم!</p>

            @auth
                <a href="{{ route('profile') }}"
                    class="mt-4 inline-block bg-blue-600 py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                    إدارة صفحتك
                </a>
            @else

            <a href="{{ route('login') }}"
                class="mt-4 inline-block bg-blue-600 py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                سجل الآن
            </a>
            @endguest



        </div>
    </footer>
    {{-- fooooooter --}}


    <script>

        const menu = document.getElementById('mobile-menu');

        // Utiliser querySelectorAll pour sélectionner les éléments avec la balise "my_link"
        document.querySelectorAll(".my_link").forEach(element => {
            element.onclick = () => {
                menu.classList.toggle('translate-x-full');
                menu.classList.toggle('translate-x-0');
            };
        });

        function toggleMenu() {


            menu.classList.toggle('translate-x-full');
            menu.classList.toggle('translate-x-0');
        }
    </script>
</body>

</html>