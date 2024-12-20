@extends('layouts.app')





@section('title', 'Cool Link - كول لينكس')




@section('content')




  <div class="min-h-screen flex flex-cols items-center justify-center py-6 px-4 mt-10 sm:mt-1">
    <div class="grid md:grid-cols-2 gap-10 max-w-6xl w-full">
      <div>
        <h1 class="lg:text-6xl text-5xl font-extrabold lg:leading-[55px] text-blue-800 mb-4">
          انظم الينا الأن
        </h1>
        <h2 class="lg:text-2xl text-xl font-extrabold lg:leading-[55px] text-gray-800">
          وقم بمشاركة روابطك مع جمهورك
          ببساطة و في صفحة واحدة
        </h2>
        <p class="text-sm mt-6 text-gray-800">
          شارك روابطك واجمعها
          في مكان واحد بطريقة بسيطة وسلسة مع
          <b class="text-pink-500 text-xl px-2">
            Cool Links.
          </b>
        </p>
        <p class="text-sm mt-12 text-gray-800">
          لدي حساب بالفعل ؟
          <a href="/login" class="text-blue-600 font-semibold hover:underline ml-1">
            سجل الدخول الآن !
          </a>
        </p>
      </div>

     <form method="POST" action="{{ route('register') }}" class="max-w-md md:ml-auto w-full border-2 border-white p-4 shadow-lg rounded-md">
    @csrf

    <h3 class="text-gray-800 text-3xl font-extrabold mb-8">
        انشاء حساب جديد
    </h3>

    <div class="space-y-4">
        <!-- Name -->
        <div>
            <input name="name" type="text" autocomplete="name" required
                class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md outline-none focus:border-2 border-gray-900"
                placeholder="الاسم ..." value="{{ old('name') }}" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div>
            <input name="email" type="email" autocomplete="email" required
                class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md outline-none focus:border-2 border-gray-900"
                placeholder="البريد الإلكتروني" value="{{ old('email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <input name="password" type="password" autocomplete="new-password" required
                class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md outline-none focus:border-2 border-gray-900"
                placeholder="كلمة المرور" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <input name="password_confirmation" type="password" autocomplete="new-password" required
                class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md outline-none focus:border-2 border-gray-900"
                placeholder="تأكيد كلمة المرور" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <input id="remember-me" name="remember" type="checkbox"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded outline-none" />
                <label for="remember-me" class="ml-3 block text-sm text-gray-800">تذكرني</label>
            </div>
        </div>
    </div>

    <!-- Register Button -->
    <div class="mt-8">
        <button type="submit" class="w-full inline-block text-center shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
            انشاء الحساب
        </button>
    </div>

    <!-- Divider with OR -->
    <div class="mt-10">
        <!-- <div class="w-full h-1 bg-blue-500 my-4 relative">
            <p class="w-[35px] h-[35px] rounded-full border-2 text-center border-blue-500
                absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-blue-500
                leading-[30px] font-bold text-white">
                او
            </p>
        </div>

        <a href="/" class="flex items-center justify-center mt-10 cursor-pointer">
            <svg class="bg-white p-2 rounded-full" width="50px" height="50px" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4" />
                <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853" />
                <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05" />
                <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335" />
            </svg> -->
        </a>
    </div>
</form>

    </div>
  </div>







@endsection