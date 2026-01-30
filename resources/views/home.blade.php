<x-layout>
    <x-slot:title>Profil Penulis</x-slot:title>

    <div class="max-w-3xl mx-auto mt-16 px-6">
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
            
            <div class="h-2 bg-gradient-to-r from-indigo-500 to-purple-500"></div>

            <div class="p-8 md:p-10">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
                    
                    <div class="relative group">
                        <img 
                            src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=f1f5f9&color=6366f1&size=256&bold=true" 
                            alt="{{ $user->name }}"
                            class="w-32 h-32 md:w-36 md:h-36 rounded-2xl object-cover ring-4 ring-slate-50 shadow-sm"
                        >
                        <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 border-4 border-white rounded-full" title="Online"></span>
                    </div>

                    <div class="flex-1 text-center md:text-left">
                        <div class="mb-4">
                            <span class="text-indigo-600 text-xs font-bold uppercase tracking-widest">
                                {{ $user->role ?? 'Penulis' }}
                            </span>
                            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mt-1">
                                {{ $user->name }}
                            </h1>
                            <p class="text-slate-500 mt-2 flex items-center justify-center md:justify-start gap-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                {{ $user->email }}
                            </p>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 py-6 border-t border-slate-100">
                            <div>
                                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-wider">Bergabung</p>
                                <p class="text-slate-700 font-semibold">{{ $user->created_at->format('d M Y') }}</p>
                            </div>
                            <div>
                                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-wider">Total Post</p>
                                <p class="text-slate-700 font-semibold">{{ $user->posts_count }} Karya</p>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-wider">Status</p>
                                <div class="flex items-center gap-1.5 justify-center md:justify-start">
                                    <p class="text-indigo-600 font-semibold flex items-center gap-1">
                                        Verified
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center md:justify-start">
                            <a href='/author/{{ $user->username }}' class="inline-flex items-center justify-center px-8 py-3 bg-slate-900 hover:bg-indigo-600 text-white text-sm font-bold rounded-xl transition-all duration-300 shadow-sm">
                                Lihat Semua Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>