<x-layout>
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" 
      class="relative left-1/2 -z-10 aspect-1155/678 w-144.5 max-w-none -translate-x-1/2 rotate-30 bg-linear-to-tr from-pink-300 to-indigo-300 opacity-30 sm:left-[calc(50%-40rem)] sm:w-288.75">
    </div>
  </div>

  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Edit Artikel</h2>
  </div>

  <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    @csrf 
    @method('PUT') 
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

      {{-- FIRST NAME --}}
      <div>
        <label for="name" class="block text-sm/6 font-semibold text-gray-700">Judul</label>
        <div class="mt-2.5">
          <input type="text" name="title" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-500"
          value="{{ old('title', $post->title) }}" class="w-full p-2 border rounded">
        </div>
      </div>

      {{-- LAST NAME --}}
      <div>
        <label for="author" class="block text-sm/6 font-semibold text-gray-700">Author</label>
        <div class="mt-2.5">
          <input name="author_id" value="{{ old('author_id', $post->author_id) }}" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-500">
        </div>
      </div>

      {{-- COMPANY --}}
      <div class="sm:col-span-2">
        <label for="slug" class="block text-sm/6 font-semibold text-gray-700">Slug</label>
        <div class="mt-2.5">
          <input type="text" name="slug"  value="{{ old('slug', $post->slug) }}" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-500">
        </div>
      </div>

      {{-- EMAIL --}}
      <div class="sm:col-span-2">
        <label for="category" class="block text-sm/6 font-semibold text-gray-700">Category</label>
        <div class="mt-2.5">
          <select name="category_id" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-500">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == $post->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
          </select>
        </div>
      </div>

      {{-- MESSAGE --}}
      <div class="sm:col-span-2">
        <label class="block text-sm/6 font-semibold text-gray-700">Isi Article</label>
        <div class="mt-2.5">
          <textarea name="body" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-500">{{ old('body', $post->body) }}</textarea>
        </div>
      </div>

    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Update Artikel 
      </button>
    </div>
  </form>
</div>
</x-layout>
