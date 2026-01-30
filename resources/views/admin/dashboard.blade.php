<x-layout>

    <!-- <div class="flex items-center gap-3 mb-8 relative">

        
        <div class="relative">
            <button onclick="toggleMenu()"
                class="p-2 rounded-full hover:bg-gray-100">
                ⋮
            </button>

            <div id="menu"
                class="hidden absolute left-0 mt-2 w-40 bg-white border rounded shadow z-50">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Refresh</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Pengaturan</a>
            </div>
        </div> -->

       
        <!-- <h1 class="text-2xl font-bold">Dashboard</h1>
    </div> -->

    <div class="space-y-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 shadow-sm border border-gray-100 rounded-2xl flex items-center hover:shadow-md transition-shadow duration-300">
                <div class="p-4 bg-blue-50 rounded-xl mr-5">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Artikel</h2>
                    <p class="text-3xl font-bold text-gray-800">{{ $totalArtikel }}</p>
                </div>
            </div>

            <div class="bg-white p-6 shadow-sm border border-gray-100 rounded-2xl flex items-center hover:shadow-md transition-shadow duration-300">
                <div class="p-4 bg-green-50 rounded-xl mr-5">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 11h.01M7 15h.01M13 7h.01M13 11h.01M13 15h.01M17 7h.01M17 11h.01M17 15h.01"></path></svg>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Kategori</h2>
                    <p class="text-3xl font-bold text-gray-800">{{ $totalCategory }}</p>
                </div>
            </div>

            <div class="bg-white p-6 shadow-sm border border-gray-100 rounded-2xl flex items-center hover:shadow-md transition-shadow duration-300">
                <div class="p-4 bg-purple-50 rounded-xl mr-5">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div class="overflow-hidden">
                    <h2 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Admin Aktif</h2>
                    <p class="text-xl font-bold text-gray-800 truncate">{{ Auth::user()->name }}</p>
                </div>
            </div>

        </div>

        
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col md:flex-row items-center justify-between">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold text-gray-800">Siap untuk menulis sesuatu?</h3>
                <p class="text-gray-500">Buat artikel baru dan bagikan pengetahuan Anda hari ini.</p>
            </div>
            
            <a href="{{ route('admin.posts.additional.create') }}" 
               class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all duration-200 shadow-lg shadow-indigo-200 group">
                <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create New Article
            </a>
        </div>
    </div>
</x-layout>