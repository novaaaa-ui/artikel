<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<x-layout>
    <x-slot:title>Tambah Artikel</x-slot:title>

    <div class="max-w-3xl mx-auto py-10 px-4">

        
        @if ($errors->any())
            <div class="mb-6 bg-rose-50 border-l-4 border-rose-500 p-4 rounded-xl shadow-sm">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-rose-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-bold text-rose-800">Terdapat beberapa kesalahan:</h3>
                        <ul class="mt-1 text-sm text-rose-700 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <form id="articleForm" method="POST" action="{{ route('admin.posts.additional.store') }}" class="space-y-6">
            @csrf

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
                <div class="grid grid-cols-1 gap-6">
                    
                 
                    <div>
                        <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Judul Artikel</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                               placeholder="Contoh: Cara Belajar Tailwind CSS dengan Cepat"
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none">
                    </div>

                   
                    <div>
                        <label for="slug" class="block text-sm font-bold text-gray-700 mb-2 flex items-center">
                            Slug URL
                            <span class="ml-2 text-[10px] bg-gray-100 text-gray-500 px-2 py-0.5 rounded uppercase tracking-wider">Otomatis</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-400 text-sm">site.com/posts/</span>
                            </div>
                            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                   class="w-full pl-[105px] pr-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-gray-500 text-sm italic outline-none cursor-not-allowed"
                                   readonly>
                        </div>
                    </div>

                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Pilih Kategori</label>
                        <select name="category_id" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none bg-white">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                   
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Konten Utama</label>
                        <div class="rounded-xl overflow-hidden border border-gray-300">
                            <div id="toolbar" class="bg-gray-50 border-b border-gray-300 p-2">
                                <span class="ql-formats">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                </span>

                                <span class="ql-formats">
                                    <button class="ql-list" value="ordered"></button>
                                    <button class="ql-list" value="bullet"></button>
                                </span>

                                <span class="ql-formats">
                                    <button class="ql-clean"></button>
                                </span>

                                <span class="ql-formats">
                                    <button id="btn-source">&lt;/&gt;</button>
                                </span>

                                <span class="ql-formats">
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button>                                
                                </span>

                                <select class="ql-align">
                                    <option selected></option>
                                    <option value="left"></option>
                                    <option value="center"></option>
                                    <option value="right"></option>
                                    <option value="justify"></option>
                                </select>

                                <span class="ql-formats">
                                    <select class="ql-color"></select>
                                    <select class="ql-background"></select>
                                </span>

                                <select class="ql-font">
                                    <option selected></option>
                                    <option value="arial">Arial</option>
                                    <option value="times">Times</option>
                                    <option value="poppins">Poppins</option>
                                </select>
                                
                                <button class="ql-undo">
                                    <svg viewBox="0 0 18 18">
                                        <path d="M6 8H3l3-3v2c4.418 0 8 3.582 8 8h-2c0-3.314-2.686-6-6-6z"></path>
                                    </svg>
                                </button>

                                <button class="ql-redo">
                                    <svg viewBox="0 0 18 18">
                                        <path d="M12 8h3l-3-3v2c-4.418 0-8 3.582-8 8h2c0-3.314 2.686-6 6-6z"></path>
                                    </svg>
                                </button>

                                <span class="ql-formats">
                                    <button class="ql-image"></button>
                                </span>
                            </div>
                            <div id="editor" class="min-h-[300px] bg-white text-lg"></div>
                        </div>
                        <input type="hidden" name="body" id="body">
                    </div>
                </div>

                
                <div class="mt-8">
                    <button type="submit" class="w-full md:w-auto px-10 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg shadow-blue-200 transition-all transform active:scale-[0.98] flex items-center justify-center">
                        <!-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg> -->

                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Simpan & Terbitkan Artikel
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

    <script>
        var Font = Quill.import('formats/font');
        Font.whitelist = ['arial', 'times', 'poppins'];
        Quill.register(Font, true);

        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: { toolbar: '#toolbar' },
            placeholder: 'Tuliskan isi pikiran Anda di sini...'
        });

        
        document.getElementById('title').addEventListener('input', function () {
            const slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .trim()
                .replace(/\s+/g, '-');
            document.getElementById('slug').value = slug;
        });

        
        document.getElementById('articleForm').addEventListener('submit', function (e) {
            const html = quill.root.innerHTML.trim();
            document.getElementById('body').value = html;

            if (html === '<p><br></p>' || html === '') {
                e.preventDefault();
                alert('Konten artikel tidak boleh kosong!');
            }
        });

        
        @if(old('body'))
            quill.root.innerHTML = {!! json_encode(old('body')) !!}
        @endif
    </script>

    <style>
    .ql-font-arial {
        font-family: Arial, sans-serif;
    }

    .ql-font-times {
        font-family: "Times New Roman", serif;
    }

    .ql-font-poppins {
        font-family: 'Poppins', sans-serif;
    }
    </style>

    <style>
        .prose table {
            width: 100%;
            border-collapse: collapse;
        }
        .porse th,
        .porse td {
            border: 1px solid #ccc;
            padding: 8px;
        }
    </style>


</x-layout>