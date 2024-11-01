<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <title>@yield('title', 'Cool Link - كول لينكس')</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <link rel="shortcut icon" href="{{asset("/statics/logo.png")}}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @vite('resources/css/app.css')
    <!-- GSAP and ScrollTrigger Scripts -->

</head>

<body class="antialiased rtl">
    <!-- خلفية متحركة -->
    <header class="h-10 sm:h-16 flex items-center w-full
            fixed top-0 z-50 bg-blue-500
            ">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <a href="/" class="uppercase text-gray-800 dark:text-white font-black text-3xl">
                <img src="./statics/logo.png" alt="cool links">
            </a>
            <div class="flex items-center">
                <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden"
                    id="menu">
                    <a href="/" class="py-2 px-6 flex">
                        الرئيسية
                    </a>
                    <a href="/contact" class="py-2 px-6 flex">
                        تواصل معنا
                    </a>
                    <a href="/#how-to-use" class="py-2 px-6 flex">
                        كيفة الاستخدام
                    </a>
                    <span href="#" class="w-40">

                    </span>
                    <a href="/login" class="py-2 px-6 flex">
                        سجيل الدخول
                    </a>
                </nav>
                <button class="lg:hidden flex flex-col ml-4" id="menu-btn">
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                    </span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                    </span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                    </span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')






    {{-- fooooooter  --}}
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
            <a href="/login"
                class="mt-4 inline-block bg-blue-600 py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">سجل
                الآن</a>
        </div>
    </footer>
    {{-- fooooooter  --}}
</body>

</html>
