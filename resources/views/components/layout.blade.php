<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-gray-900 text-gray-100 flex flex-col">
        <div class="p-4 text-xl font-bold border-b border-gray-700">
            <nav class="flex-1 p-4">
            <a href="/admin">
               ADMIN PANEL
            </a>
        </div>
        
        <nav class="flex-1 p-4">
            <a href="/home"
               class="block px-3 py-2 rounded mb-2 hover:bg-gray-700">
               Home
            </a>

             <a href="/about"
               class="block px-3 py-2 rounded mb-2 hover:bg-gray-700">
               About
            </a>

            <a href="/posts"
               class="block px-3 py-2 rounded mb-2 hover:bg-gray-700">
               Blog
            </a>
 
            <a href="{{ route('admin.posts.index') }}"
               class="block px-3 py-2 rounded mb-2 hover:bg-gray-700">
               Menejemen Artikel
            </a>

            <a href="/contact"
               class="block px-3 py-2 rounded mb-2 hover:bg-gray-700">
               Contact
            </a>
        </nav>

        {{-- LOGOUT --}}
        <form action="/logout" method="GET" class="p-4">
            <button class="w-full bg-red-600 py-2 rounded hover:bg-red-500">
                Logout
            </button>
        </form>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-semibold mb-6">{{ $title ?? '' }}</h1>

        {{ $slot }}
    </main>

</body>

</html>