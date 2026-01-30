<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                
                {{-- Breadcrumbs & Back Button --}}
                <nav class="flex mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/posts" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 000 1.414l7 7a1 1 0 001.414-1.414L5.414 11H17a1 1 0 100-2H5.414l5.293-5.293a1 1 0 000-1.414z"></path></svg>
                                Back to Blog
                            </a>
                        </li>
                    </ol>
                </nav>

                {{-- Header Section --}}
                <header class="mb-8 lg:mb-10 not-format">
                    <div class="flex items-center mb-5">
                        <a href="/categories/{{ $post->category->slug }}" 
                           class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-semibold mr-3 px-2.5 py-0.5 rounded-full uppercase tracking-wider transition-all hover:scale-105">
                            {{ $post->category->name }}
                        </a>
                        <span class="text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }} • {{ ceil(str_word_count(strip_tags($post->body)) / 200) }} min read</span>
                    </div>

                    <h1 class="mb-6 text-4xl font-extrabold leading-tight text-gray-900 lg:text-5xl dark:text-white">
                        {{ $post->title }}
                    </h1>

                    {{-- Author Card --}}
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-12 h-12 rounded-full border-2 border-primary-500 p-0.5" 
                                 src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=random" 
                                 alt="{{ $post->author->name }}">
                            <div>
                                <a href="/author/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">
                                    {{ $post->author->name }}
                                </a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Content Creator & Writer</p>
                            </div>
                        </div>
                    </address>
                </header>

                {{-- Featured Image Placeholder (Optional) --}}
                {{-- <figure class="mb-10">
                    <img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" class="rounded-xl shadow-lg" alt="Cover Image">
                </figure> --}}

                {{-- Content --}}
                <section class="prose prose-lg lg:prose-xl dark:prose-invert prose-img:rounded-xl prose-a:text-primary-600 max-w-none">
                    {!! $post->body !!}
                </section>

                {{-- Footer: Tags or Share --}}
                <!-- <footer class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-sm font-bold text-gray-900 dark:text-white mr-2">Share:</span>
                        {{-- Social Media Icons could go here --}}
                    </div>
                </footer> -->

            </article>
        </div>
    </main>
</x-layout>