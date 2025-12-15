<x-layout>
    <x-slot:title>Tambah Artikel</x-slot:title>

    <h1 class="text-2xl font-bold mb-4">Tambah Artikel</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Kategori</label>
            <select name="category_id" class="w-full p-2 border rounded" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="title" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Isi Artikel</label>
            <textarea name="body" rows="6" class="w-full p-2 border rounded" required></textarea>
        </div>

        <button class="bg-green-600 text-white px-3 py-2 rounded">
            Simpan
        </button>
    </form>
</x-layout>
