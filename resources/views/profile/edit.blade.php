<section class="bg-red-100 p-6 rounded-md my-2 shadow-lg overflow-y-auto w-full max-w-[600px] max-h-[calc(100vh-80px)] relative mx-2 h-fit custom-scroll">
    <svg fill="#ffffff" height="35px" width="35px" version="1.1" class="absolute top-1 left-1 bg-red-600 rounded-full p-2 cursor-pointer" id="btn_close_update_profile_container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
        <g>
            <g>
                <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256" />
            </g>
        </g>
    </svg>

    <div>
        <h1 class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 text-gray-800">
            الملف الشخصي
        </h1>
        <h2 class="text-gray-500 text-sm mb-4">تعديل الملف الشخصي</h2>
        
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Cover Image -->
            <div class="w-full rounded-sm bg-cover bg-center bg-no-repeat items-center" style="background-image: url('{{ $user->cover_image ?? asset("statics/cover.svg") }}');">
                <!-- Profile Image -->
                <div class="mx-auto flex justify-center w-[141px] h-[141px] bg-white rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $user->image ?? asset("statics/profile.svg") }}');">
                    <div class="bg-white rounded-full w-12 h-12 p-1 text-center ml-28 mt-4">
                        <input type="file" name="profile_image" id="upload_profile" hidden>
                        <label for="upload_profile"
                        class="cursor-pointer"
                        >
                            <svg data-slot="icon" class="w-10 h-10 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                            </svg>
                        </label>
                    </div>
                </div>

                <div class="flex justify-end">
                    <input type="file" name="cover_image" id="upload_cover" hidden>
                    <div class="bg-white flex items-center gap-1 rounded-tl-md px-2 text-center font-semibold">
                        <label for="upload_cover" class="inline-flex items-center gap-1 cursor-pointer">غلاف
                            <svg data-slot="icon" class="w-10 h-10 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>

            <h2 class="text-center mt-1 font-semibold text-gray-500">تحميل صورة الملف الشخصي وصورة الغلاف</h2>
            
            <div class="flex flex-wrap gap-2 justify-center w-full">
                <div class="w-full mb-4 mt-6">
                    <label for="name" class="mb-2 text-gray-500">الاسم :</label>
                    <input type="text" name="name" id="name" class="mt-2 p-4 w-full border-2 rounded-lg" value="{{ $user->name ?? '' }}" placeholder="الاسم الأول">
                </div>
                
                <div class="w-full mb-4 lg:mt-6">
                    <label for="title" class="text-gray-500">الاسم الوظيفي</label>
                    <input type="text" name="title" id="title" class="mt-2 p-4 w-full border-2 rounded-lg" value="{{ $user->title ?? '' }}" placeholder="مطور ويب | مصمم">
                </div>
            </div>

            <div class="w-full mb-4 lg:mt-6">
                    <label for="email" class="text-gray-500">البريد الالكتروني :</label>
                    <input type="text" name="email" id="email" class="mt-2 p-4 w-full border-2 rounded-lg" value="{{ $user->email ?? '' }}" 
                    placeholder="البريد الالكتروني ...">
                </div>

            <!-- <div class="sm:flex xs:flex gap-2 justify-center w-full hidden">
                <div class="w-full">
                    <h3 class="text-gray-500 mb-2">الجنس</h3>
                    <select name="gender" class="w-full text-gray-500 border-2 rounded-lg p-4 pl-2 pr-2">
                        <option disabled value="">اختر الجنس</option>
                        <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>ذكر</option>
                        <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>أنثى</option>
                    </select>
                </div>
                <div class="w-full">
                    <h3 class="text-gray-500 mb-2">تاريخ الميلاد</h3>
                    <input type="date" name="birthdate" class="text-gray-500 p-4 w-full border-2 rounded-lg" value="{{ $user->birthdate ?? '' }}">
                </div>
            </div> -->
            <div class="w-full mb-4 lg:mt-6">
            <label for="" class="text-gray-500">نص تعريفي</label>
            <textarea
            name="about"
             type="text" class="mt-2 p-4 w-full border-2 rounded-lg"
              placeholder="نص تعريفي عنك ...">{{ old('about', $user->about) }}</textarea>
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
