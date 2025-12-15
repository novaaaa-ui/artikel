<x-layout>
    <x-slot:title>Manajemen Artikel</x-slot:title>

    <!-- <a href="{{ route('admin.posts.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-500">
       + Tambah Artikel
    </a> -->

    <div class="mt-6 bg-white shadow rounded-xl p-6">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3">Judul</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $post->title }}</td>
                    <td class="p-3">{{ $post->created_at->format('d M Y') }}</td>
                    <td class="p-3">
                        <a class="text-blue-600 hover:underline"
                           href="{{ route('admin.posts.edit', $post->id) }}">
                           Edit
                        </a>

                        |

                        <form action="{{ route('admin.posts.destroy', $post) }}"
                              method="POST" class="inline"
                              onsubmit="return confirm('Hapus artikel?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
