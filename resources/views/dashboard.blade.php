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

      @if(!$user->cover_image)
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
      <img class="w-full" src="{{asset($user->cover_image)}}" alt="" />
    @endif
    </div>
    <div class="flex justify-center px-5  -mt-12 relative">

      @include('profile.copy-url')

      @if($user->image)
      <img class="h-32 w-32 bg-white  rounded-full" src="{{asset($user->image)}}" alt="{{$user->name}}" />
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
        {{$user->name}}
      @endauth
        </h2>
        <p class="text-gray-400 mt-2 hover:text-blue-500
        cursor-pointer
        ">
          @auth
        {{$user->title}}
      @endauth
          </a>
        <p class="mt-2 text-gray-500 text-sm">
          @auth
        {{$user->about}}
      @endauth

        </p>
      </div>


      <div>
        <button class="mt-4 bg-[#D53692] text-white pt-2 pb-3
        hover:scale-105 mx-12
        px-4 rounded-full hover:bg-[#D53692]  transition" id="btn_open_update_profile_container">تعديل
          الملف الشخصي
        </button>
        <a class="mt-4 bg-[#03b3e9] text-white pt-2 pb-3
        hover:scale-105
        px-4 rounded-full hover:bg-[#06a3d3]  transition" target="_blank" href="/{{$user->profile_link->user_url}}">
          زيارة صفحتك الخاصة
        </a>



      </div>




      <hr class="mt-6" />
      <div class="flex">
        <div class="text-center w-1/2 p-4">
          <p><span class="font-semibold text-black">

              {{$user->profile_link->visits}}
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

    @include("profile.edit")


  </section>


  <!-- إدارة الروابط -->
  <div class="max-w-[1500px] mx-auto p-8 mt-12">
    <section class="mb-12">
      <h3 class="text-3xl font-bold mb-6 text-[#D53692]">اظافةرابط جديد</h3>

      <!-- Message Popup -->
      @if(session('message'))
      <div
      class="fixed bottom-5 right-5 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-md shadow-lg transition-opacity duration-300"
      id="success-popup">
      {{ session('message') }}
      </div>
    @endif

      @if ($errors->any())
      <div
      class="z-50 fixed bottom-5 right-5 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-md shadow-lg transition-opacity duration-300"
      id="error-popup">
      <ul>
        @foreach ($errors->all() as $error)
      <li>
      {{ $error }}
      </li>
    @endforeach
      </ul>
      </div>
    @endif


      <div class="bg-white/50 p-6 rounded-xl  w-full">
        <div class="w-full">
          <!-- رابط جديد -->
          <form class="flex flex-col gap-4 mb-4 w-full" method="POST" action="{{ route('links.store') }}"
            enctype="multipart/form-data">
            @csrf

            <!-- Image Selection Modal -->
            <div id="select_image_container"
              class="fixed w-screen h-screen bg-black/60 top-0 left-0 z-50 justify-center items-center hidden">
              <section
                class="bg-white rounded-lg shadow-lg max-h-[800px] h-screen max-w-[600px] w-full py-4 px-4 flex flex-col">
                <!-- Images Section -->
                @if (count($images) != 0)
          <p class="text-green-500 font-bold text-lg text-center mb-4">اختر صورة</p>
        @endif

                <section
                  class="flex-1 w-full overflow-x-auto flex flex-wrap gap-6 p-4 justify-evenly custom-scroll h-[70%]">
                  @if (count($images) == 0)
            <p class="text-center text-2xl text-red-500 font-bold">لايوج اي صور مقترحة</p>
          @endif

                  @foreach ($images as $image)
            <img src="{{ asset($image->path) }}" onclick="selectImage(this, '{{ $image->id }}')"
            class="sugg-image w-20 h-20 cursor-pointer object-cover border-2 border-gray-300 rounded-md transition duration-300 hover:shadow-lg" />
          @endforeach
                </section>
                <!-- End Images Section -->

                <section class="h-[20%] flex flex-col">
                  <div class="flex-1">
                    <span id="upload_image_container">
                      <p class="text-2xl py-2">او ارفع صورة</p>
                      <input type="file" accept="image/*" name="image"
                        class="mt-2 p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-400" />

                      <input type="hidden" name="image_id" id="link_image_id" value="">

                    </span>
                  </div>

                  <div class="flex justify-between mt-4">
                    <span></span>
                    <p onclick="toggleSelectImage('hidden')" type="button"
                      class="bg-green-600 text-white cursor-pointer py-2 px-4 rounded hover:bg-green-700 transition w-fit">
                      تأكيد
                    </p>
                  </div>
                </section>
              </section>
            </div>
            <!-- End Image Selection Modal -->

            <!-- Show Image Selection Button -->
            <p onclick="toggleSelectImage('flex')"
              class="bg-blue-600 text-white py-2 px-4 text-center rounded hover:bg-blue-700 transition w-[200px] cursor-pointer">
              اختر الصورة
            </p>

            <div class="flex gap-8 flex-wrap">
            <!-- Title Input -->
            <input type="text" placeholder="العنوان" name="title" required
              class="flex-1 max-w-[400px] min-w-[300px] p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-400" />

            <!-- URL Input -->
            <input type="text" id="linkUrl" placeholder="أدخل رابطًا جديدًا" name="url" required
              class="flex-1 max-w-[400px] min-w-[300px] p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-400" />
</div>
            <!-- Submit Button -->
            <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition w-fit">
              حفظ الرابط
            </button>
          </form>
        </div>
      </div>
    </section>




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


        @if (count($user->links) == 0)
      <p class="text-center text-2xl text-red-500 font-bold">لايوجد اي روابط</p>
    @endif
        @foreach($user->links->sortByDesc('created_at') as $link)

        <!-- Card -->
        <li class="bg-[#3FE5CF] p-3 rounded-lg shadow-lg max-w-[300px]
        w-full
        ">

          <div class="flex flex-col gap-1">
          <p class="text-lg font-semibold">
            {{$link->title}}
          </p>
          <span class="text-blue-400 truncate max-w-xs">
            {{  $link->original_url }}
          </span>
          <span class="text-sm text-gray-800">عدد النقرات:
            {{  $link->clicks }}
          </span>
          </div>

          <div class="mt-2 flex justify-between items-center">

          <span>
            <!-- <svg fill="#ffffff" class="bg-blue-500 hover:bg-blue-600 text-white p-1 pl-2 rounded-md cursor-pointer"
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
        </svg> -->
          </span>
          <form action="{{ route('links.destroy', $link->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Are you sure you want to delete this link?')">
            <svg class="bg-red-500 hover:bg-red-600 text-white p-1 pl-2 rounded-md cursor-pointer" width="30px"
              height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 7H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M6 7V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V7" stroke="#ffffff"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#ffffff"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </button>
          </form>

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
    @include('components.logout')


  </div>


  <script src="{{asset('/js/profile.js')}}"></script>
  <script>
    const sugg_images = document.getElementsByClassName("sugg-image");
    const upload_image_container = document.getElementById("upload_image_container");
    const link_image_id = document.getElementById("link_image_id");

    const selectImage = (item, image_id) => {

      for (let i = 0; i < sugg_images.length; i++) {
        if (item != sugg_images[i])
          sugg_images[i].classList.remove("selected_link_image");
      }

      item.classList.toggle("selected_link_image");

      if (item.classList.contains("selected_link_image")) {
        upload_image_container.classList.add("hidden");
        link_image_id.value = image_id;
      } else {
        upload_image_container.classList.remove("hidden");
        link_image_id.value = "";
      }
      // alert(image_id)
    }

    function toggleModal() {
      const modal = document.getElementById('updateModal');
      modal.classList.toggle('hidden');
      modal.classList.toggle('flex');
    }

    function toggleSelectImage(new_class) {
      const select_image_container = document.getElementById('select_image_container');
      select_image_container.classList.remove('hidden');
      select_image_container.classList.remove('flex');

      select_image_container.classList.add(new_class);
    }
  </script>



  <!-- Add this script at the bottom of your Blade file -->
  <script>
    // Automatically hide the pop-up after a few seconds
    setTimeout(function () {
      const successPopup = document.getElementById('success-popup');
      const errorPopup = document.getElementById('error-popup');
      if (successPopup) {
        successPopup.style.display = 'none';
      }
      if (errorPopup) {
        errorPopup.style.display = 'none';
      }
    }, 10000); // Adjust the time in milliseconds (5000 = 5 seconds)
  </script>

  @endsection