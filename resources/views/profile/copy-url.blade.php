<button id="copyButton" class="absolute top-4 right-4 flex items-center space-x-2 bg-blue-600 text-white rounded-md px-3 py-2
 text-sm font-medium hover:bg-blue-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
        </svg>
        <span>نسخ الرابط</span>
    </button>

    <div id="successMessage" class="hidden absolute top-16 right-4 bg-green-500 text-white px-3 py-2 rounded-md text-sm">
        تم نسخ الرابط بنجاح!
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyButton = document.getElementById('copyButton');
            const successMessage = document.getElementById('successMessage');

            copyButton.addEventListener('click', async function() {
                try {
                    await navigator.clipboard.writeText(window.location.host + "/" +"{{auth()->user()->profile_link->user_url}}");
                    successMessage.classList.remove('hidden');
                    setTimeout(() => {
                        successMessage.classList.add('hidden');
                    }, 2000);
                } catch (err) {
                    console.error('فشل في نسخ الرابط:', err);
                }
            });
        });
    </script>