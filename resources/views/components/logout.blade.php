
<!-- Logout Button -->
<button onclick="openModal()" 
        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
    تسجيل الخروج
</button>

<!-- Modal -->
<div id="logoutModal" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-6 w-full max-w-sm">
        <h2 class="text-lg font-semibold mb-4">تأكيد تسجيل الخروج</h2>
        <p class="mb-6">هل أنت متأكد أنك تريد تسجيل الخروج؟</p>
        <div class="flex justify-end gap-8">
            <button onclick="closeModal()" 
                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2">
                إلغاء
            </button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                        class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">
                    تأكيد
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Scripts -->
<script>
    function openModal() {
        document.getElementById('logoutModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('logoutModal').classList.add('hidden');
    }
</script>
