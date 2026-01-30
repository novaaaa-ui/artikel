<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill-better-table@1.2.10/dist/quill-better-table.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill-better-table@1.2.10/dist/quill-better-table.css">


<x-layout>
    <x-slot:title>Tambah Artikel Baru</x-slot:title>

    <div class="max-w-4xl mx-auto">
        <nav class="flex mb-4 text-sm text-gray-500">
            <a href="/admin/posts" class="hover:text-indigo-600">Manajemen Artikel</a>
            <span class="mx-2">/</span>
            <span class="text-gray-800 font-medium">Tambah Baru</span>
        </nav>

        <div class="bg-white shadow-sm border border-gray-200 rounded-2xl overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h1 class="text-xl font-bold text-gray-800">Tulis Artikel Baru</h1>
                <p class="text-sm text-gray-500">Isi formulir di bawah ini untuk menerbitkan konten baru.</p>
            </div>

            <form id="postForm" action="{{ route('admin.posts.store') }}" method="POST" class="p-8 space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Konten Lengkap</label>

                    <div class="rounded-xl overflow-hidden border border-gray-300">
                        <div id="toolbar">
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>

                            <button class="ql-list" value="ordered"></button>
                            <button class="ql-list" value="bullet"></button>

                            <span class="ql-fotmats">
                                <select class= "ql-color"></select>
                                <select class="ql-background"></select>
                            </span>

                            <button class="ql-link"></button>
                            <button class="ql-image"></button>
                            
                        </div>

                        <div id="editor" class="h-80 bg-white text-lg"></div>
                    </div>

                    <input type="hidden" name="body" id="body">
                </div>

                <div class="pt-4 border-t border-gray-100 flex justify-end space-x-3">
                    <a href="{{ route('admin.posts.index') }}" class="px-6 py-3 text-sm font-semibold text-gray-600">
                        Batal
                    </a>
                    <button type="submit" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl">
                        Terbitkan Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>


<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-better-table@1.2.10/dist/quill-better-table.min.js"></script>

<script>
Quill.register({
  'modules/better-table': quillBetterTable
}, true);

const quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: {
            container: '#toolbar',
            handlers: {
                image: imageHandler
            }
        },
        table: false,
        'better-table': {
            operationMenu: {
                items: {
                    insertColumnRight: { text: 'Insert Column Right' },
                    insertColumnLeft: { text: 'Insert Column Left' },
                    insertRowAbove: { text: 'Insert Row Above' },
                    insertRowBelow: { text: 'Insert Row Below' },
                    deleteColumn: { text: 'Delete Column' },
                    deleteRow: { text: 'Delete Row' },
                    deleteTable: { text: 'Delete Table' }
                }
            }
        }
    },
    placeholder: 'Mulai menulis cerita Anda di sini...'
});


document.getElementById('insert-table').addEventListener('click', function () {
    const tableModule = quill.getModule('better-table');
    tableModule.insertTable(3, 3);
});


function imageHandler() {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';
    input.click();

    input.onchange = async () => {
        const file = input.files[0];
        if (!file) return;

        const formData = new FormData();
        formData.append('image', file);

        const response = await fetch("{{ route('quill.upload') }}", {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            body: formData
        });

        const data = await response.json();
        const range = quill.getSelection(true);
        quill.insertEmbed(range.index, 'image', data.url);
    };
}

document.getElementById('postForm').addEventListener('submit', function () {
    document.getElementById('body').value = quill.root.innerHTML;
});
</script>
