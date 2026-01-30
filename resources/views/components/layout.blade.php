<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 antialiased">

    <div class="min-h-screen flex" x-data="{ sidebarOpen: false}">
        
        <aside class="hidden md:flex w-72 bg-slate-900 text-white flex-col shadow-xl">
            <div class="p-6 flex items-center space-x-3 bg-slate-950/50">
                <div class="h-8 w-8 bg-indigo-500 rounded-lg flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/30">
                    A
                </div>
                <span class="text-xl font-extrabold tracking-tight uppercase italic">Arti<span class="text-indigo-400">kel</span></span>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">

                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mt-6 mb-2">User</p>

                <a href="/home"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('home') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">
                    <svg
                        class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 9h3m-3 3h3m-3 3h3m-6 1c-.306-.613-.933-1-1.618-1H7.618c-.685 0-1.312.387-1.618 1M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm7 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"
                        />
                    </svg>
                    <span class="font-medium">Profile</span>
                </a>

                @auth 
                @if(auth()->user()->role === 'admin')

                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Main Menu</p>
                
                <a href="/admin" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('home') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">
                    <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="{{ route('admin.posts.index') }}"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('admin/posts*') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">
                    <svg
                        class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"
                        />
                    </svg>
                    <span class="font-medium">Manajemen Artikel</span>
                </a>
                @endif 
                @endauth

                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mt-6 mb-2">Pages</p>

                <a href="/posts"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('admin') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">

                    <svg
                        class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"
                        />
                    </svg>

                    <span class="font-medium">Artikel</span>
                </a>

            </nav>

            
            <div class="p-4 bg-slate-950/30">
                <div class="flex items-center p-2 mb-4">
                    <div class="h-10 w-10 rounded-full bg-slate-700 border border-slate-600 flex items-center justify-center overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Admin+User&background=6366f1&color=fff" alt="Profile">
                    </div>
                    <div class="ml-3 overflow-hidden">
                        @auth
                        <p class="text-sm font-semibold truncate text-white">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-400 truncate">{{ Auth::user()->email }}</p>
                        @endauth
                    </div>
            </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-rose-600 rounded-xl hover:bg-rose-500 transition-colors shadow-lg shadow-rose-900/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <aside
            x-show="sidebarOpen"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            @click.outside="sidebarOpen = false"
            class="fixed inset-y-0 left-0 z-50 w-72 bg-slate-900 text-white flex flex-col shadow-xl md:hidden"
        >


            <div class="flex items-center justify-between p-6 bg-slate-950/50">

                <div class="flex items-center space-x-3">
                    <div class="h-8 w-8 bg-indigo-500 rounded-lg flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/30">
                        A
                    </div>
                    <span class="text-xl font-extrabold tracking-tight uppercase italic">
                        Arti<span class="text-indigo-400">kel</span>
                    </span>
                </div>

                <button
                    @click="sidebarOpen = false"
                    class="text-white text-xl hover:text-rose-400 transition"
                    aria-label="Close sidebar"
                >
                         <svg
                            class="w-6 h-6 text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6"
                            />
                        </svg>

                </button>

            </div>

            
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mt-6 mb-2">User</p>

                <a href="/home"
                @click= "sidebarOpen = false"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('home') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">
                    <svg
                        class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 9h3m-3 3h3m-3 3h3m-6 1c-.306-.613-.933-1-1.618-1H7.618c-.685 0-1.312.387-1.618 1M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm7 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"
                        />
                    </svg>
                    <span class="font-medium">Profile</span>
                </a>
                @auth 
                @if(auth()->user()->role === 'admin')

                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Main Menu</p>
                
                <a href="/admin" 
                @click="sidebarOpen = false"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('home') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">
                    <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="{{ route('admin.posts.index') }}"
                @click="sidebarOpen = false"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('admin/posts*') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">
                    <svg
                        class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"
                        />
                    </svg>
                    <span class="font-medium">Manajemen Artikel</span>
                </a>
                @endif 
                @endauth

                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mt-6 mb-2">Pages</p>

                <a href="/posts"
                @click="sidebarOpen =false"
                class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 hover:bg-slate-800 group {{ Request::is('admin') ? 'bg-indigo-600 shadow-md shadow-indigo-600/20' : '' }}">

                    <svg
                        class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"
                        />
                    </svg>

                    <span class="font-medium">Artikel</span>
                </a>

            </nav>

            
            <div class="p-4 bg-slate-950/30">
                <div class="flex items-center p-2 mb-4">
                    <div class="h-10 w-10 rounded-full bg-slate-700 border border-slate-600 flex items-center justify-center overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Admin+User&background=6366f1&color=fff" alt="Profile">
                    </div>
                    <div class="ml-3 overflow-hidden">
                        @auth 
                        <p class="text-sm font-semibold truncate text-white">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-400 truncate">{{ Auth::user()->email }}</p>
                        @endauth 
                    </div>
            </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-rose-600 rounded-xl hover:bg-rose-500 transition-colors shadow-lg shadow-rose-900/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>

        </aside>


        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
           
            <header class="h-16 bg-white border-b border-gray-200 flex items-center px-8">
                <div class="flex items-center gap-3 relative">

                    <button
                        @click="sidebarOpen = true"
                        class="md:hidden flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        aria-label="Open sidebar">

                        <svg class="w-6 h-6 text-gray-800 dark:text-black"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor"
                                stroke-linecap="round"
                                stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h14"/>
                        </svg>
                    </button>
                    
                    <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                        {{ $title ?? 'Dashboard' }}
                    </h2>

                </div>
            </header> 

            <div class="flex-1 overflow-x-hidden overflow-y-auto p-8">
                <div class="container mx-auto">
                    <div class="animate-in fade-in slide-in-from-bottom-4 duration-700">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>                                                              