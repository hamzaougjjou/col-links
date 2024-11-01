@extends('layouts.app')



@section('title', 'Cool Link - كول لينكس')


@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  /* خلفية متحركة */
  @keyframes floating {
    0% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-10px);
    }

    100% {
      transform: translateY(0);
    }
  }

  .floating {
    animation: floating 3s ease-in-out infinite;
  }
</style>
</head>

{{--

<body class="rtl bg-gray-900 font-sans leading-normal tracking-normal"> --}}



  <!-- component -->
  <div class="max-w-[1200px] w-full shadow-lg  
      mx-auto mt-20 hover:scale-105 transition-transform duration-300 floating
      transform easy-in-out">
    <div class="h-64 overflow-hidden">

      @if(!auth()->user()->cover_image)
      <svg class="w-full h-[150%] border-2 border-gray-300
      -mt-5 bg-gray-500/10 object-contains
      " fill="#ff9fdf88" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 58 58" xml:space="preserve">
      <g>
        <path d="M56,34.36V32h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1h-1H41h-1h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1v2.36
      c0,3.534,1.845,6.748,4.827,8.64C41.845,44.892,40,48.105,40,51.64V54h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1h14h2h1
      c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-2.36c0-3.534-1.845-6.748-4.827-8.64C54.155,41.108,56,37.895,56,34.36z M54,51.64V54H42
      v-2.36c0-3.319,2.033-6.298,5.197-7.64h1.605C51.967,45.342,54,48.32,54,51.64z M48.803,42h-1.605C44.033,40.658,42,37.68,42,34.36
      V32h12v2.36C54,37.68,51.967,40.658,48.803,42z" />
        <path
        d="M57,2H1C0.448,2,0,2.447,0,3v44c0,0.553,0.448,1,1,1h36.523c0.536-1.851,1.473-3.551,2.739-5
      C38.199,40.639,37,37.607,37,34.36V27h21V3C58,2.447,57.552,2,57,2z M16,8c3.071,0,5.569,2.498,5.569,5.569
      c0,3.07-2.498,5.568-5.569,5.568s-5.569-2.498-5.569-5.568C10.431,10.498,12.929,8,16,8z M52.737,26.676
      c-0.373,0.406-1.006,0.435-1.413,0.062L40.063,16.414l-9.181,10.054l4.807,4.807c0.391,0.391,0.391,1.023,0,1.414
      s-1.023,0.391-1.414,0L23.974,22.389L7.661,36.751C7.471,36.918,7.235,37,7,37c-0.277,0-0.553-0.114-0.751-0.339
      c-0.365-0.415-0.325-1.047,0.09-1.412l17.017-14.982c0.396-0.348,0.994-0.329,1.368,0.044l4.743,4.743l9.794-10.727
      c0.179-0.196,0.429-0.313,0.694-0.325c0.264-0.006,0.524,0.083,0.72,0.262l12,11C53.083,25.636,53.11,26.269,52.737,26.676z" />
      </g>
      </svg>
    @else
      <img class="w-full" src="{{asset(auth()->user()->cover_image)}}" alt="" />
    @endif
    </div>
    <div class="flex justify-center px-5  -mt-12">

      @if(auth()->user()->image)
      <img class="h-32 w-32 bg-white  rounded-full" src="{{asset(auth()->user()->image)}}"
      alt="{{auth()->user()->name}}" />
    @else
      <svg class="h-32 w-32 bg-white/50 rounded-full" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
      <path fill="#000000"
        d="M628.736 528.896A416 416 0 0 1 928 928H96a415.872 415.872 0 0 1 299.264-399.104L512 704l116.736-175.104zM720 304a208 208 0 1 1-416 0 208 208 0 0 1 416 0z" />
      </svg>
    @endif
    </div>
    <div class=" ">
      <div class="text-center px-14">
        <h2 class="text-gray-800 text-3xl font-bold">
          @auth
        {{auth()->user()->name}}
      @endauth
        </h2>
        <p class="text-gray-400 mt-2 hover:text-blue-500
        cursor-pointer
        ">
          @auth
        {{auth()->user()->title}}
      @endauth
          </a>
        <p class="mt-2 text-gray-500 text-sm">
          @auth
        {{auth()->user()->about}}
      @endauth

        </p>
      </div>


      <div>
        <a 
        target="_blank"
        href="/{{auth()->user()->profile_link->user_url}}">
          view ulr
        </a>
      </div>
      <button class="mt-4 bg-[#D53692] text-white pt-2 pb-3
        hover:scale-105 mx-12
        px-4 rounded-full hover:bg-[#D53692]  transition" id="btn_open_update_profile_container">تعديل
        الملف الشخصي
      </button>


      <hr class="mt-6" />
      <div class="flex">
        <div class="text-center w-1/2 p-4">
          <p><span class="font-semibold text-black">

          {{auth()->user()->profile_link->visits}}
              زيارة
            </span></p>
        </div>
        <div class="border"></div>
        <div class="text-center w-1/2 p-4">
          <p> <span class="font-semibold text-black">
             {{ $links_click_count }}
              ضغط على الروابط
            </span></p>
        </div>

      </div>
    </div>
  </div>


  <section class="fixed top-0 left-0 w-screen h-screen bg-black/70
              z-50 hidden justify-center items-center
              " id="update_profile_container">

    <section class="bg-red-100 p-6 rounded-md my-2 shadow-lg
      overflow-y-auto w-full max-w-[600px] max-h-[calc(100vh-80px)]
      relative mx-2 h-fit
      ">

      <svg fill="#ffffff" height="35px" width="35px" version="1.1" class="absolute top-1 left-1 bg-red-600 rounded-full p-2
    cursor-pointer
      " id="btn_close_update_profile_container" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
        <g>
          <g>
            <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 
			512,452.922 315.076,256 		" />
          </g>
        </g>
      </svg>

      <div>
        <h1 class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 text-gray-800">
          الملف الشخصي
        </h1>
        <h2 class="text-gray-500 text-sm mb-4">تعديل الملف الشخصي</h2>
        <form>
          <!-- صورة الغلاف -->
          <div
            class="w-full rounded-sm bg-[url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxob21lfGVufDB8MHx8fDE3MTA0MDE1NDZ8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat items-center">
            <!-- صورة الملف الشخصي -->
            <div
              class="mx-auto flex justify-center w-[141px] h-[141px] bg-blue-300/20 rounded-full bg-[url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxwcm9maWxlfGVufDB8MHx8fDE3MTEwMDM0MjN8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat">
              <div class="bg-white rounded-full w-6 h-6 text-center ml-28 mt-4">
                <input type="file" name="profile" id="upload_profile" hidden required>
                <label for="upload_profile">
                  <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none" stroke-width="1.5"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                  </svg>
                </label>
              </div>
            </div>
            <div class="flex justify-end">
              <!--  -->
              <input type="file" name="profile" id="upload_cover" hidden required>
              <div class="bg-white flex items-center gap-1 rounded-tl-md px-2 text-center font-semibold">
                <label for="upload_cover" class="inline-flex items-center gap-1 cursor-pointer">غلاف
                  <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none" stroke-width="1.5"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                  </svg>
                </label>
              </div>
            </div>
          </div>
          <h2 class="text-center mt-1 font-semibold text-gray-500">تحميل صورة الملف الشخصي وصورة الغلاف</h2>
          <div class="flex flex-wrap gap-2 justify-center w-full">
            <div class="w-full mb-4 mt-6">
              <label for="" class="mb-2 text-gray-500">الاسم :</label>
              <input type="text" class="mt-2 p-4 w-full border-2 rounded-lg" placeholder="الاسم الأول">
            </div>
            <div class="w-full mb-4 lg:mt-6">
              <label for="" class="text-gray-500">الاسم الوظيفي</label>
              <input type="text" class="mt-2 p-4 w-full border-2 rounded-lg" placeholder="مطور ويب | مصمم">
            </div>
          </div>

          <div class="block sm:flex xs:flex gap-2 justify-center w-full">
            <div class="w-full">
              <h3 class="text-gray-500 mb-2">الجنس</h3>
              <select class="w-full text-gray-500 border-2 rounded-lg p-4 pl-2 pr-2">
                <option disabled value="">اختر الجنس</option>
                <option value="Male">ذكر</option>
                <option value="Female">أنثى</option>
              </select>
            </div>
            <div class="w-full">
              <h3 class="text-gray-500 mb-2">تاريخ الميلاد</h3>
              <input type="date" class="text-gray-500 p-4 w-full border-2 rounded-lg">
            </div>
          </div>

          <div class="w-full mb-4 lg:mt-6">
            <label for="" class="text-gray-500">نص تعريفي</label>
            <textarea type="text" class="mt-2 p-4 w-full border-2 rounded-lg"
              placeholder="نص تعريفي عنك ..."></textarea>
          </div>

          <p class="text-sm">
            <span class="text-red-600">
              (*)
            </span>
            : حقول اجبارية
          </p>

          <div class="w-full mt-4">
            <button type="submit" class="px-4 pt-1 pb-2 bg-[#2DD881] text-lg font-semibold
                rounded-md hover:bg-green-700 hover:text-white
                ">إرسال</button>
          </div>
        </form>
      </div>

    </section>


  </section>


  <!-- محتوى الصفحة -->
  <div class=" max-w-6xl mx-auto p-8 mt-12">
    <!-- إدارة الروابط -->
    <section class="mb-12">
      <h3 class="text-3xl font-bold mb-6 text-[#D53692]">اظافةرابط جديد</h3>
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- رابط جديد -->
          <form id="linkForm" class="flex items-center gap-2 mb-4">

            <!-- زر لإظهار النافذة المنبثقة -->
            <button onclick="openPopup()" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition
              w-[200px]
              ">
              اختر المنصة
            </button>


            <input type="text" id="linkUrl" placeholder="أدخل رابطًا جديدًا"
              class="w-full p-2 border border-gray-600 rounded focus:outline-none focus:border-blue-400" required>
            <button type="submit"
              class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition">إضافة</button>
          </form>
        </div>
      </div>
    </section>




    <!-- النافذة المنبثقة -->
    <div id="popup"
      class="fixed top-0 left-0 w-full h-full justify-center items-center bg-black bg-opacity-50 hidden">
      <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <button class="text-2xl font-bold mb-4">اختر منصة</bu>

          <!-- قائمة الأيقونات للاختيار -->
          <div class="grid grid-cols-3 gap-4 mb-4">
            <button onclick="selectPlatform('Facebook', 'fa-facebook')">
              <i class="fab fa-facebook text-3xl text-blue-600"></i>
            </button>
            <button onclick="selectPlatform('Instagram', 'fa-instagram')">
              <i class="fab fa-instagram text-3xl text-pink-600"></i>
            </button>
            <button onclick="selectPlatform('Twitter', 'fa-twitter')">
              <i class="fab fa-twitter text-3xl text-blue-400"></i>
            </button>
            <!-- يمكنك إضافة المزيد من الأيقونات هنا -->
          </div>

          <!-- إدخال عنوان الرابط -->
          <label for="linkTitle" class="block mb-2">أدخل عنوان الرابط:</label>
          <input type="text" id="linkTitle" placeholder="مثال: صفحتي على الفيسبوك"
            class="w-full p-2 border border-gray-300 rounded mb-4">

          <!-- زر الإضافة -->
          <button onclick="addLink()"
            class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition w-full">إضافة</button>

          <!-- زر إغلاق -->
          <button onclick="closePopup()"
            class="mt-4 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">إغلاق</button>
      </div>
    </div>

    <!-- إحصائيات النقرات -->
    <!-- <section class="w-full py-4 my-4">
      <h3 class="text-3xl font-bold py-6
      px-2 text-center
      ">إحصائيات الزيارات و النقرات</h3>
      <div class=" justify-center flex-wrap
      container mx-auto flex gap-8
      ">
        <canvas class="p-2 rounded-md m-1 shadow-lg
        max-w-[600px] max-h-[300px]
        " id="visitsChart"></canvas>
        <canvas class="p-2 rounded-md m-1 shadow-md
        max-w-[600px] max-h-[300px]
        " id="clicksChart"></canvas>
      </div>

    </section> -->


    <section class="mt-4">
      <h3 class="text-3xl font-bold mb-6 text-[#D53692]
    text-center
    ">
        جميع الروابط
      </h3>
      <!-- قائمة الروابط -->
      <ul class="w-full flex flex-wrap gap-4 justify-evenly
          max-w-[1500px] mx-auto my-6
          ">

          @foreach ( auth()->user()->links as $link)
         

        <!-- Card -->
        <li class="bg-[#3FE5CF] p-3 rounded-lg shadow-lg max-w-[350px]
            w-full
            ">

          <div class="flex flex-col gap-1">
            <p class="text-lg font-semibold">
            {{$link->title}}
            </p>
            <span class="text-blue-400 truncate max-w-xs">
              {{  $link->original_url }}
            </span>
            <span class="text-sm text-gray-800">عدد النقرات:    {{  $link->clicks }}</span>
          </div>

          <div class="mt-2 flex justify-between items-center">

            <svg fill="#ffffff" class="bg-blue-500 hover:bg-blue-600 text-white p-1 pl-2 rounded-md cursor-pointer"
              onclick="toggleModal()" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 494.936 494.936"
              xml:space="preserve">
              <g>
                <g>
                  <path d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
                  c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
                  s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
                  c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z" />
                  <path d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
                  c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
                  c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
                  C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
                  l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
                  c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z" />
                </g>
              </g>
            </svg>
            <svg class="bg-red-500 hover:bg-red-600 text-white p-1 pl-2 rounded-md cursor-pointer" width="30px"
              height="30px" onclick="toggleModal()" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 7H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M6 7V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V7" stroke="#ffffff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#ffffff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

          </div>

        </li>
        @endforeach

        <!-- Modal -->
        <div id="updateModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden items-center justify-center z-50">
          <div class="bg-white rounded-lg p-6 w-full max-w-md shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">تحديث الرابط</h2>
            <label for="newLink" class="block text-gray-600 text-sm mb-2">الرابط الجديد</label>
            <input id="newLink" type="text"
              class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200"
              placeholder="أدخل الرابط الجديد">
            <div class="flex justify-end gap-2 mt-6">
              <button class="px-4 py-2 rounded bg-gray-300 text-gray-800 hover:bg-gray-400"
                onclick="toggleModal()">إلغاء</button>
              <button class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600">حفظ</button>
            </div>
          </div>
        </div>

      </ul>

    </section>
    <br>

  </div>

  <!-- <script>

    const visitsChart_ctx = document.getElementById('visitsChart').getContext('2d');
    const clicksChart_ctx = document.getElementById('clicksChart').getContext('2d');

    // Gradient for the first dataset (Visits)
    const gradientVisits = visitsChart_ctx.createLinearGradient(0, 0, 0, 400);
    gradientVisits.addColorStop(0, 'rgba(222, 0, 0, 0.5)');
    gradientVisits.addColorStop(1, 'rgba(0, 0, 0, 0)');

    // Gradient for the second dataset (Clicks)
    const gradientClicks = clicksChart_ctx.createLinearGradient(0, 0, 0, 400);
    gradientClicks.addColorStop(0, 'rgba(0, 222, 0, 0.4)');
    gradientClicks.addColorStop(1, 'rgba(0, 0, 0, 0)');

    const config = {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'Clicks',  // Second line (Clicks)
            data: [45, 39, 60, 71, 36, 35, 20],
            fill: true,
            backgroundColor: gradientClicks,
            borderColor: "#FE5F00",
            tension: 0.3,
            borderWidth: 1,  // Adjust line width here
            pointRadius: 1,          // Adjust point size here
            pointHoverRadius: 1      // Adjust point size on hover
          }
        ]
      },
      options: {
        scales: {
          x: {
            grid: {
              display: false
            }
          },
          y: {
            grid: {
              display: false
            }
          }
        },

        plugins: {
          legend: {
            display: false // Enables legend for the datasets
          }
        }
      }
    };

    const clicks_config = {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'Clicks',  // Second line (Clicks)
            data: [45, 39, 60, 71, 36, 35, 20],
            fill: true,
            backgroundColor: gradientClicks,
            borderColor: "#FE5F00",
            tension: 0.3,
            borderWidth: 1,  // Adjust line width here
            pointRadius: 1,          // Adjust point size here
            pointHoverRadius: 1      // Adjust point size on hover
          }
        ]
      },
      options: {
        scales: {
          x: {
            grid: {
              display: false
            }
          },
          y: {
            grid: {
              display: false
            }
          }
        },

        plugins: {
          legend: {
            display: !false // Enables legend for the datasets
          }
        }
      }
    };

    new Chart(visitsChart_ctx, config);
    new Chart(clicksChart_ctx, clicks_config);
  </script> -->

  <script src="{{asset('./js/profile.js')}}"></script>
  <script>
    function toggleModal() {
      const modal = document.getElementById('updateModal');
      modal.classList.toggle('hidden');
      modal.classList.toggle('flex');
    }
  </script>

  @endsection