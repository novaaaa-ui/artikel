<x-layout>
    <x-slot:title>Artikel By {{ $author->name }}</x-slot:title>

    <div class="max-w-3xl mx-auto py-10">

     
        <div class="mb-8">
            <h1 class="text-2xl font-bold">{{ $author->name }}</h1>
            <!-- <p class="text-gray-500">@{{ $author->username }}</p> -->
            <p class="text-sm text-gray-400 capitalize">
                Role: {{ $author->role }}
            </p>
        </div>

        
        <!-- <h2 class="text-xl font-semibold mb-4">
            Artikel oleh {{ $author->name }}
        </h2> -->

        @forelse ($posts as $post)
            <div class="mb-4 border-b pb-3">
                <a href="/posts/{{ $post->slug }}"
                   class="font-semibold text-lg hover:underline">
                    {{ $post->title }}
                </a>
                <p class="text-sm text-gray-500">
                    {{ $post->created_at->diffForHumans() }}
                    • {{ $post->readingTime() }}
                </p>
            </div>
        @empty
            <p class="text-gray-500">Belum ada artikel.</p>
        @endforelse

    </div>
</x-layout>
