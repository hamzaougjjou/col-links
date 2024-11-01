@extends('layouts.app')



<link rel="stylesheet" href="{{ asset('homeSlider.css') }}">

<!-- GSAP and ScrollTrigger Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>





@section('title', 'Cool Link - كول لينكس')




@section('content')

<div class="max-w-[1500px] mx-auto mt-2 sm:mt-20">
    <main class="relative overflow-hidden max-h-[calc(100vh-100px)] rtl">

        <div class="flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-6 flex relative py-16 gap-12">
                <div class="sm:w-2/3 lg:w-[60%] flex flex-col relative z-20">
                    <span class="w-44 h-2 bg-green-800 mb-12">
                    </span>

                    <h1
                        class="typing-wrapper font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                        كول لينكس
                        <p class="ltr w-full mt-3 text-pink-500 typing-demo">
                            Cool Link<span class="lowercase">s</span>
                        </p>

                    </h1>
                    <p class="text-sm sm:text-base text-gray-700 dark:text-white
                        mt-6 leading-7
                        ">
                        اجمع كل روابطك ومعلوماتك في صفحة واحدة!
                        اجعل من السهل على الجميع الوصول إلى كل ما تريده في مكان واحد.
                    </p>
                    <div class="flex gap-4 mt-12">
                        <a href="/profile"
                            class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                            ابدأ الان
                        </a>
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            كيفة الاستخدام
                        </a>
                    </div>
                </div>
                <div class="hidden sm:flex relative w-[40%]
                    bg-repd-900 flex justify-center items-center
                    ">
                    <img src="./statics/iphone1.png" class="w-[600px]" />
                </div>
            </div>
        </div>
    </main>

    <!-- القسم الرئيسي (الهيدر) -->

    <!-- قسم المعلومات (حول الموقع) -->
    <section class="pb-16 -mt-12 section">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl font-semibold rtl">لماذا

                    <span class="text-pink-500">
                        كول لينكس
                    </span>

                    Cool Links
                </h2>
                <p class="mt-4 text-gray-600">سهولة الوصول والتنقل السريع بين جميع حساباتك الاجتماعية ومعلوماتك
                    الشخصية
                    في مكان واحد.</p>
            </div>

            <div class="flex flex-wrap gap-8 mt-12 rtl justify-center ">
                <div class="shadow-lg p-6 rounded-lg text-white max-w-[450px] w-full font-bold bg-yellow-600">
                    <h3 class="text-2xl font-semibold">كل الروابط في مكان واحد</h3>
                    <p class="mt-4">اجمع حساباتك الاجتماعية، موقعك الإلكتروني، والبريد الإلكتروني في صفحة
                        واحدة.</p>
                </div>
                <div class="text-white max-w-[450px] w-full font-bold bg-green-500 shadow-lg p-6 rounded-lg rtl">
                    <h3 class="text-2xl font-semibold">سهولة التخصيص</h3>
                    <p class="mt-4">يمكنك تخصيص صفحتك بالألوان والتصميمات التي تناسبك.</p>
                </div>
                <div class="text-white max-w-[450px] w-full font-bold bg-blue-600 shadow-lg p-6 rounded-lg rtl">
                    <h3 class="text-2xl font-semibold">مشاركة سريعة</h3>
                    <p class="mt-4">شارك صفحتك بسهولة عبر الروابط أو باستخدام رمز QR.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =================================================================================================== -->

    <!-- قسم المثال (Demo) -->
    <div class="container mx-auto px-4 text-center section">
        <h2 class="text-3xl font-semibold mb-8">مثال على صفحة المستخدم</h2>
    </div>

    <div class="wrapper section">
        <i id="left" class='flex justify-center items-center'>
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 17L13 12L18 7M11 17L6 12L11 7" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </i>
        <ul class="carousel overflow-hidden
            mx-auto w-full
            ">

            <div class="flex-none carousel-item max-w-[calc(100%-20px)] w-[400px] bg-orange-400 p-1 rounded-md">
                <!-- القسم الرئيسي للمستخدم -->
                <section class="bg-slate-400 text-white py-16 rounded w-full">
                    <div class="container mx-auto text-center">
                        <img src="https://picsum.photos/id/1/150/150" alt="User Profile Image"
                            class="w-32 h-32 rounded-full mx-auto border-4 border-white">
                        <h1 class="text-3xl font-bold mt-4">اسم المستخدم</h1>
                        <p class="text-lg mt-2">مطور ويب | مصمم</p>
                    </div>
                </section>

                <!-- قسم الروابط -->
                <section class="py-6 w-full">
                    <div class="container mx-auto px-4">
                        <h2 class="text-2xl font-semibold text-center mb-8">روابط المستخدم</h2>

                        <!-- قائمة الروابط -->
                        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
                            <!-- رابط 1 -->
                            <a href="https://www.twitter.com" target="_blank"
                                class="block py-3 px-6 bg-blue-500 text-white rounded-lg mb-4 hover:bg-blue-600 transition">
                                تويتر
                            </a>

                            <!-- رابط 2 -->
                            <a href="https://www.linkedin.com" target="_blank"
                                class="block py-3 px-6 bg-indigo-500 text-white rounded-lg mb-4 hover:bg-indigo-600 transition">
                                لينكدإن
                            </a>

                            <!-- رابط 3 -->
                            <a href="https://www.github.com" target="_blank"
                                class="block py-3 px-6 bg-gray-800 text-white rounded-lg mb-4 hover:bg-gray-900 transition">
                                جيتهاب
                            </a>

                            <!-- رابط 4 -->
                            <a href="https://www.facebook.com" target="_blank"
                                class="block py-3 px-6 bg-blue-700 text-white rounded-lg mb-4 hover:bg-blue-800 transition">
                                فيسبوك
                            </a>

                            <!-- رابط 5 -->
                            <a href="https://www.instagram.com" target="_blank"
                                class="block py-3 px-6 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">


                                إنستغرام
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex-none carousel-item max-w-[calc(100%-20px)] w-[400px] bg-purple-400 p-1 rounded-md">
                <!-- القسم الرئيسي للمستخدم -->
                <section class="bg-yellow-600 text-white py-16 rounded">
                    <div class="container mx-auto text-center">
                        <img src="https://picsum.photos/id/1/150/150" alt="User Profile Image"
                            class="w-32 h-32 rounded-full mx-auto border-4 border-white">
                        <h1 class="text-3xl font-bold mt-4">اسم المستخدم</h1>
                        <p class="text-lg mt-2">مطور ويب | مصمم</p>
                    </div>
                </section>

                <!-- قسم الروابط -->
                <section class="py-6">
                    <div class="container mx-auto px-4">
                        <h2 class="text-2xl font-semibold text-center mb-8">روابط المستخدم</h2>

                        <!-- قائمة الروابط -->
                        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
                            <!-- رابط 1 -->
                            <a href="https://www.twitter.com" target="_blank"
                                class="block py-3 px-6 bg-blue-500 text-white rounded-lg mb-4 hover:bg-blue-600 transition">
                                تويتر
                            </a>

                            <!-- رابط 2 -->
                            <a href="https://www.linkedin.com" target="_blank"
                                class="block py-3 px-6 bg-indigo-500 text-white rounded-lg mb-4 hover:bg-indigo-600 transition">
                                لينكدإن
                            </a>

                            <!-- رابط 3 -->
                            <a href="https://www.github.com" target="_blank"
                                class="block py-3 px-6 bg-gray-800 text-white rounded-lg mb-4 hover:bg-gray-900 transition">
                                جيتهاب
                            </a>

                            <!-- رابط 4 -->
                            <a href="https://www.facebook.com" target="_blank"
                                class="block py-3 px-6 bg-blue-700 text-white rounded-lg mb-4 hover:bg-blue-800 transition">
                                فيسبوك
                            </a>

                            <!-- رابط 5 -->
                            <a href="https://www.instagram.com" target="_blank"
                                class="block py-3 px-6 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">
                                إنستغرام
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex-none carousel-item max-w-[calc(100%-20px)] w-[400px] bg-green-400 p-1 rounded-md">
                <!-- القسم الرئيسي للمستخدم -->
                <section class="bg-orange-600 text-white py-16 rounded">
                    <div class="container mx-auto text-center">
                        <img src="https://picsum.photos/id/1/150/150" alt="User Profile Image"
                            class="w-32 h-32 rounded-full mx-auto border-4 border-white">
                        <h1 class="text-3xl font-bold mt-4">اسم المستخدم</h1>
                        <p class="text-lg mt-2">مطور ويب | مصمم</p>
                    </div>
                </section>

                <!-- قسم الروابط -->
                <section class="py-6">
                    <div class="container mx-auto px-4">
                        <h2 class="text-2xl font-semibold text-center mb-8">روابط المستخدم</h2>

                        <!-- قائمة الروابط -->
                        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
                            <!-- رابط 1 -->
                            <a href="https://www.twitter.com" target="_blank"
                                class="block py-3 px-6 bg-blue-500 text-white rounded-lg mb-4 hover:bg-blue-600 transition">
                                تويتر
                            </a>

                            <!-- رابط 2 -->
                            <a href="https://www.linkedin.com" target="_blank"
                                class="block py-3 px-6 bg-indigo-500 text-white rounded-lg mb-4 hover:bg-indigo-600 transition">
                                لينكدإن
                            </a>

                            <!-- رابط 3 -->
                            <a href="https://www.github.com" target="_blank"
                                class="block py-3 px-6 bg-gray-800 text-white rounded-lg mb-4 hover:bg-gray-900 transition">
                                جيتهاب
                            </a>

                            <!-- رابط 4 -->
                            <a href="https://www.facebook.com" target="_blank"
                                class="block py-3 px-6 bg-blue-700 text-white rounded-lg mb-4 hover:bg-blue-800 transition">
                                فيسبوك
                            </a>

                            <!-- رابط 5 -->
                            <a href="https://www.instagram.com" target="_blank"
                                class="block py-3 px-6 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">
                                إنستغرام
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </ul>
        <i id="right" class='flex justify-center items-center'>

            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 17L11 12L6 7M13 17L18 12L13 7" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </i>
    </div>

    <!-- =================================================================================================== -->

    <section class="py-16 rtl section">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">مميزات موقعنا</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-white p-6 shadow-lg rounded-lg max-w-sm text-center">
                    <i class="fas fa-cogs text-4xl text-blue-600 mb-4"></i> <!-- استخدم أيقونة مناسبة -->
                    <h3 class="text-xl font-semibold">تخصيص سهل</h3>
                    <p class="mt-4 text-gray-600">تخصيص صفحتك بالألوان والتصميمات التي تناسبك.</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg max-w-sm text-center">
                    <i class="fas fa-share-alt text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">مشاركة سريعة</h3>
                    <p class="mt-4 text-gray-600">مشاركة روابطك بسهولة عبر رمز
                        QR
                        أو الروابط المباشرة.</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg max-w-sm text-center">
                    <i class="fas fa-chart-line text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-semibold">إحصائيات</h3>
                    <p class="mt-4 text-gray-600">تتبع عدد الزيارات لرابطك ومواقعك الاجتماعية.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-blue-700 py-8  section
        bg-no-repeat bg-cover bg-cover mt-2 bg-transparent
        "
        style="background-image: url('https://img.freepik.com/free-vector/gradient-smooth-background_23-2148973716.jpg?t=st=1729621119~exp=1729624719~hmac=d05a203b9f3bb90e4c7daeb7fdbe7fcbd5d68e57caea854603619a466c483f28&w=740');"
        id="how-to-use">

        <div class="p-8 rtl font-bold">
            <h2 class="text-3xl font-semibold text-green-600">كيف يعمل الموقع؟</h2>
            <div class="px-8 mt-2">
                <div class="max-w-sm">
                    <i class="fas fa-user-plus mb-4 text-4xl text-blue-600"></i>
                    <h3 class="text-xl font-semibold">
                        1-إنشاء حساب

                    </h3>
                    <p class="mt-4 text-gray-600">ابدأ بإنشاء حسابك المجاني.</p>
                </div>
                <div class="max-w-sm">
                    <i class="fas fa-link mb-4 text-4xl text-green-600"></i>
                    <h3 class="text-xl font-semibold">2-إضافة الروابط</h3>
                    <p class="mt-4 text-gray-600">قم بإضافة جميع روابطك في صفحة واحدة.</p>
                </div>
                <div class="max-w-sm">
                    <i class="fas fa-share-alt mb-4 text-4xl text-yellow-600"></i>
                    <h3 class="text-xl font-semibold">3-مشاركة صفحتك</h3>
                    <p class="mt-4 text-gray-600">شارك صفحتك عبر وسائل التواصل الاجتماعي أو رمز QR.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 text-center section">
        <h2 class="text-3xl font-semibold mb-4">شاركنا على وسائل التواصل الاجتماعي!</h2>
        <p class="mb-6">ابقَ على اتصال وكن جزءًا من مجتمعنا.</p>

        <div class="w-full h-auto py-8 flex items-center justify-center gap-4 flex-wrap">

            <button
                class="w-16 h-16 flex items-center justify-center rounded-lg bg-white/60 shadow-md shadow-gray-200 group transition-all duration-300">
                <svg class="transition-all duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg"
                    width="45" height="45" viewBox="0 0 72 72" fill="none">
                    <path
                        d="M46.4927 38.6403L47.7973 30.3588H39.7611V24.9759C39.7611 22.7114 40.883 20.4987 44.4706 20.4987H48.1756V13.4465C46.018 13.1028 43.8378 12.9168 41.6527 12.8901C35.0385 12.8901 30.7204 16.8626 30.7204 24.0442V30.3588H23.3887V38.6403H30.7204V58.671H39.7611V38.6403H46.4927Z"
                        fill="#337FFF" />
                </svg>
            </button>

            <button
                class="w-16 h-16 flex items-center justify-center group rounded-lg bg-white/60 shadow-md shadow-gray-200 group transition-all duration-300">
                <svg class="transition-all duration-300 group-hover:scale-110" width="45" height="45"
                    viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.4456 35.7808C27.4456 31.1786 31.1776 27.4468 35.7826 27.4468C40.3875 27.4468 44.1216 31.1786 44.1216 35.7808C44.1216 40.383 40.3875 44.1148 35.7826 44.1148C31.1776 44.1148 27.4456 40.383 27.4456 35.7808ZM22.9377 35.7808C22.9377 42.8708 28.6883 48.618 35.7826 48.618C42.8768 48.618 48.6275 42.8708 48.6275 35.7808C48.6275 28.6908 42.8768 22.9436 35.7826 22.9436C28.6883 22.9436 22.9377 28.6908 22.9377 35.7808ZM46.1342 22.4346C46.1339 23.0279 46.3098 23.608 46.6394 24.1015C46.9691 24.595 47.4377 24.9797 47.9861 25.2069C48.5346 25.4342 49.1381 25.4939 49.7204 25.3784C50.3028 25.2628 50.8378 24.9773 51.2577 24.5579C51.6777 24.1385 51.9638 23.6041 52.0799 23.0222C52.1959 22.4403 52.1367 21.8371 51.9097 21.2888C51.6828 20.7406 51.2982 20.2719 50.8047 19.942C50.3112 19.6122 49.7309 19.436 49.1372 19.4358H49.136C48.3402 19.4361 47.5771 19.7522 47.0142 20.3144C46.4514 20.8767 46.1349 21.6392 46.1342 22.4346ZM25.6765 56.1302C23.2377 56.0192 21.9121 55.6132 21.0311 55.2702C19.8632 54.8158 19.0299 54.2746 18.1538 53.4002C17.2777 52.5258 16.7354 51.6938 16.2827 50.5266C15.9393 49.6466 15.533 48.3214 15.4222 45.884C15.3009 43.2488 15.2767 42.4572 15.2767 35.781C15.2767 29.1048 15.3029 28.3154 15.4222 25.678C15.5332 23.2406 15.9425 21.918 16.2827 21.0354C16.7374 19.8682 17.2789 19.0354 18.1538 18.1598C19.0287 17.2842 19.8612 16.7422 21.0311 16.2898C21.9117 15.9466 23.2377 15.5406 25.6765 15.4298C28.3133 15.3086 29.1054 15.2844 35.7826 15.2844C42.4598 15.2844 43.2527 15.3106 45.8916 15.4298C48.3305 15.5408 49.6539 15.9498 50.537 16.2898C51.7049 16.7422 52.5382 17.2854 53.4144 18.1598C54.2905 19.0342 54.8308 19.8682 55.2855 21.0354C55.6289 21.9154 56.0351 23.2406 56.146 25.678C56.2673 28.3154 56.2915 29.1048 56.2915 35.781C56.2915 42.4572 56.2673 43.2466 56.146 45.884C56.0349 48.3214 55.6267 49.6462 55.2855 50.5266C54.8308 51.6938 54.2893 52.5266 53.4144 53.4002C52.5394 54.2738 51.7049 54.8158 50.537 55.2702C49.6565 55.6134 48.3305 56.0194 45.8916 56.1302C43.2549 56.2514 42.4628 56.2756 35.7826 56.2756C29.1024 56.2756 28.3125 56.2514 25.6765 56.1302ZM25.4694 10.9322C22.8064 11.0534 20.9867 11.4754 19.3976 12.0934C17.7518 12.7316 16.3585 13.5878 14.9663 14.977C13.5741 16.3662 12.7195 17.7608 12.081 19.4056C11.4626 20.9948 11.0403 22.8124 10.9191 25.4738C10.7958 28.1394 10.7676 28.9916 10.7676 35.7808C10.7676 42.57 10.7958 43.4222 10.9191 46.0878C11.0403 48.7494 11.4626 50.5668 12.081 52.156C12.7195 53.7998 13.5743 55.196 14.9663 56.5846C16.3583 57.9732 17.7518 58.8282 19.3976 59.4682C20.9897 60.0862 22.8064 60.5082 25.4694 60.6294C28.138 60.7506 28.9893 60.7808 35.7826 60.7808C42.5759 60.7808 43.4286 60.7526 46.0958 60.6294C48.759 60.5082 50.5774 60.0862 52.1676 59.4682C53.8124 58.8282 55.2066 57.9738 56.5989 56.5846C57.9911 55.1954 58.8438 53.7998 59.4842 52.156C60.1026 50.5668 60.5268 48.7492 60.6461 46.0878C60.7674 43.4202 60.7956 42.57 60.7956 35.7808C60.7956 28.9916 60.7674 28.1394 60.6461 25.4738C60.5248 22.8122 60.1026 20.9938 59.4842 19.4056C58.8438 17.7618 57.9889 16.3684 56.5989 14.977C55.2088 13.5856 53.8124 12.7316 52.1696 12.0934C50.5775 11.4754 48.7588 11.0514 46.0978 10.9322C43.4306 10.811 42.5779 10.7808 35.7846 10.7808C28.9913 10.7808 28.138 10.809 25.4694 10.9322Z"
                        fill="url(#paint0_radial_7092_54471)" />
                    <path
                        d="M27.4456 35.7808C27.4456 31.1786 31.1776 27.4468 35.7826 27.4468C40.3875 27.4468 44.1216 31.1786 44.1216 35.7808C44.1216 40.383 40.3875 44.1148 35.7826 44.1148C31.1776 44.1148 27.4456 40.383 27.4456 35.7808ZM22.9377 35.7808C22.9377 42.8708 28.6883 48.618 35.7826 48.618C42.8768 48.618 48.6275 42.8708 48.6275 35.7808C48.6275 28.6908 42.8768 22.9436 35.7826 22.9436C28.6883 22.9436 22.9377 28.6908 22.9377 35.7808ZM46.1342 22.4346C46.1339 23.0279 46.3098 23.608 46.6394 24.1015C46.9691 24.595 47.4377 24.9797 47.9861 25.2069C48.5346 25.4342 49.1381 25.4939 49.7204 25.3784C50.3028 25.2628 50.8378 24.9773 51.2577 24.5579C51.6777 24.1385 51.9638 23.6041 52.0799 23.0222C52.1959 22.4403 52.1367 21.8371 51.9097 21.2888C51.6828 20.7406 51.2982 20.2719 50.8047 19.942C50.3112 19.6122 49.7309 19.436 49.1372 19.4358H49.136C48.3402 19.4361 47.5771 19.7522 47.0142 20.3144C46.4514 20.8767 46.1349 21.6392 46.1342 22.4346ZM25.6765 56.1302C23.2377 56.0192 21.9121 55.6132 21.0311 55.2702C19.8632 54.8158 19.0299 54.2746 18.1538 53.4002C17.2777 52.5258 16.7354 51.6938 16.2827 50.5266C15.9393 49.6466 15.533 48.3214 15.4222 45.884C15.3009 43.2488 15.2767 42.4572 15.2767 35.781C15.2767 29.1048 15.3029 28.3154 15.4222 25.678C15.5332 23.2406 15.9425 21.918 16.2827 21.0354C16.7374 19.8682 17.2789 19.0354 18.1538 18.1598C19.0287 17.2842 19.8612 16.7422 21.0311 16.2898C21.9117 15.9466 23.2377 15.5406 25.6765 15.4298C28.3133 15.3086 29.1054 15.2844 35.7826 15.2844C42.4598 15.2844 43.2527 15.3106 45.8916 15.4298C48.3305 15.5408 49.6539 15.9498 50.537 16.2898C51.7049 16.7422 52.5382 17.2854 53.4144 18.1598C54.2905 19.0342 54.8308 19.8682 55.2855 21.0354C55.6289 21.9154 56.0351 23.2406 56.146 25.678C56.2673 28.3154 56.2915 29.1048 56.2915 35.781C56.2915 42.4572 56.2673 43.2466 56.146 45.884C56.0349 48.3214 55.6267 49.6462 55.2855 50.5266C54.8308 51.6938 54.2893 52.5266 53.4144 53.4002C52.5394 54.2738 51.7049 54.8158 50.537 55.2702C49.6565 55.6134 48.3305 56.0194 45.8916 56.1302C43.2549 56.2514 42.4628 56.2756 35.7826 56.2756C29.1024 56.2756 28.3125 56.2514 25.6765 56.1302ZM25.4694 10.9322C22.8064 11.0534 20.9867 11.4754 19.3976 12.0934C17.7518 12.7316 16.3585 13.5878 14.9663 14.977C13.5741 16.3662 12.7195 17.7608 12.081 19.4056C11.4626 20.9948 11.0403 22.8124 10.9191 25.4738C10.7958 28.1394 10.7676 28.9916 10.7676 35.7808C10.7676 42.57 10.7958 43.4222 10.9191 46.0878C11.0403 48.7494 11.4626 50.5668 12.081 52.156C12.7195 53.7998 13.5743 55.196 14.9663 56.5846C16.3583 57.9732 17.7518 58.8282 19.3976 59.4682C20.9897 60.0862 22.8064 60.5082 25.4694 60.6294C28.138 60.7506 28.9893 60.7808 35.7826 60.7808C42.5759 60.7808 43.4286 60.7526 46.0958 60.6294C48.759 60.5082 50.5774 60.0862 52.1676 59.4682C53.8124 58.8282 55.2066 57.9738 56.5989 56.5846C57.9911 55.1954 58.8438 53.7998 59.4842 52.156C60.1026 50.5668 60.5268 48.7492 60.6461 46.0878C60.7674 43.4202 60.7956 42.57 60.7956 35.7808C60.7956 28.9916 60.7674 28.1394 60.6461 25.4738C60.5248 22.8122 60.1026 20.9938 59.4842 19.4056C58.8438 17.7618 57.9889 16.3684 56.5989 14.977C55.2088 13.5856 53.8124 12.7316 52.1696 12.0934C50.5775 11.4754 48.7588 11.0514 46.0978 10.9322C43.4306 10.811 42.5779 10.7808 35.7846 10.7808C28.9913 10.7808 28.138 10.809 25.4694 10.9322Z"
                        fill="url(#paint1_radial_7092_54471)" />
                    <defs>
                        <radialGradient id="paint0_radial_7092_54471" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(17.4144 61.017) scale(65.31 65.2708)">
                            <stop offset="0.09" stop-color="#FA8F21" />
                            <stop offset="0.78" stop-color="#D82D7E" />
                        </radialGradient>
                        <radialGradient id="paint1_radial_7092_54471" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(41.1086 63.257) scale(51.4733 51.4424)">
                            <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                            <stop offset="1" stop-color="#8C3AAA" />
                        </radialGradient>
                    </defs>
                </svg>

            </button>



            <button
                class="w-16 h-16 flex items-center justify-center rounded-lg bg-white/60 shadow-md shadow-gray-200 group transition-all duration-300">
                <svg class="rounded-md transition-all duration-300 group-hover:scale-110"
                    xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 72 72" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.6975 11C12.6561 11 11 12.6057 11 14.5838V57.4474C11 59.4257 12.6563 61.03 14.6975 61.03H57.3325C59.3747 61.03 61.03 59.4255 61.03 57.4468V14.5838C61.03 12.6057 59.3747 11 57.3325 11H14.6975ZM26.2032 30.345V52.8686H18.7167V30.345H26.2032ZM26.6967 23.3793C26.6967 25.5407 25.0717 27.2703 22.4615 27.2703L22.4609 27.2701H22.4124C19.8998 27.2701 18.2754 25.5405 18.2754 23.3791C18.2754 21.1686 19.9489 19.4873 22.5111 19.4873C25.0717 19.4873 26.6478 21.1686 26.6967 23.3793ZM37.833 52.8686H30.3471L30.3469 52.8694C30.3469 52.8694 30.4452 32.4588 30.3475 30.3458H37.8336V33.5339C38.8288 31.9995 40.6098 29.8169 44.5808 29.8169C49.5062 29.8169 53.1991 33.0363 53.1991 39.9543V52.8686H45.7133V40.8204C45.7133 37.7922 44.6293 35.7269 41.921 35.7269C39.8524 35.7269 38.6206 37.1198 38.0796 38.4653C37.8819 38.9455 37.833 39.6195 37.833 40.2918V52.8686Z"
                        fill="#006699" />
                </svg>
            </button>


            <button
                class="w-16 h-16 flex items-center justify-center rounded-lg bg-white/60 shadow-md shadow-gray-200 group transition-all duration-300">
                <svg class="rounded-md transition-all duration-300 group-hover:scale-110" width="45" height="45"
                    viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.0065 56.1236H21.4893V35.5227L9.37109 26.4341V52.4881C9.37109 54.4997 11.001 56.1236 13.0065 56.1236Z"
                        fill="#4285F4" />
                    <path
                        d="M50.5732 56.1236H59.056C61.0676 56.1236 62.6914 54.4937 62.6914 52.4881V26.4341L50.5732 35.5227"
                        fill="#34A853" />
                    <path
                        d="M50.5732 19.7693V35.5229L62.6914 26.4343V21.587C62.6914 17.0912 57.5594 14.5282 53.9663 17.2245"
                        fill="#FBBC04" />
                    <path d="M21.4893 35.5227V19.769L36.0311 30.6754L50.5729 19.769V35.5227L36.0311 46.429"
                        fill="#EA4335" />
                    <path
                        d="M9.37109 21.587V26.4343L21.4893 35.5229V19.7693L18.0962 17.2245C14.4971 14.5282 9.37109 17.0912 9.37109 21.587Z"
                        fill="#C5221F" />
                </svg>
            </button>
        </div>


    </section>


    <section class="py-16 text-center text-white section">
        <h2 class="text-3xl font-semibold mb-4">ابدأ الآن!</h2>
        <p class="text-lg mb-6">إنشاء صفحتك الشخصية أصبح أسهل من أي وقت مضى.</p>
        <a href="#" class="bg-blue-600 py-3 px-6 rounded-lg text-lg font-bold hover:bg-blue-700 transition">إنشاء
            صفحة</a>
    </section>



    <section class="py-10 px-1 section">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">آراء المستخدمين</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-white p-6 shadow-lg rounded-lg max-w-sm text-center">
                    <p class="italic text-gray-700">"موقع رائع! استطعت جمع جميع روابط حساباتي في مكان واحد بسهولة."
                    </p>
                    <h3 class="mt-4 text-xl font-semibold">أحمد</h3>
                    <p class="text-gray-500">مطور ويب</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg max-w-sm text-center">
                    <p class="italic text-gray-700">"استخدامه بسيط وسريع، واستطعت تخصيص صفحتي بسهولة."</p>
                    <h3 class="mt-4 text-xl font-semibold">فاطمة</h3>
                    <p class="text-gray-500">مصممة جرافيك</p>
                </div>
            </div>
        </div>
    </section>


</div>

<!-- JavaScript to toggle the menu -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

<script src="{{asset('./script.js')}}"></script>

@endsection