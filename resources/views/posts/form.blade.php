<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>จัดการข้อมูล</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
                {{ isset($post) ? 'แก้ไข' : 'เพิ่ม' }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                        <form method="post"
                            action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}"
                            class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            {{-- add @method('put') for edit mode --}}
                            @isset($post)
                                @method('put')
                            @endisset
    
                            <div>
                                <x-input-label for="title" value="ชื่อ" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    :value="$post->title ?? old('title')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
    
                            <div>
                                <x-input-label for="type" value="ฤดู" />
                                <select id="type" name="type" class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                    required autofocus>
                                    <option class="ฤดูร้อน" @if (isset($post) && $post->type == 'ฤดูหนาว') selected @endif>ฤดูร้อน
                                    </option>
                                    <option value="ฤดูฝน" @if (isset($post) && $post->type == 'ฤดูร้อน') selected @endif>ฤดูฝน
                                    </option>
                                    <option value="ฤดูหนาว" @if (isset($post) && $post->type == 'ฤดูฝน') selected @endif>ฤดูหนาว
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('type')" />
                            </div>
    
    
                            <div>
                                <x-input-label for="content" value="คำอธิบาย" />
                                <x-textarea-input id="content" name="content" class="mt-1 block w-full" required
                                    autofocus>{{ $post->content ?? old('content') }}</x-textarea-input>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>
    
                            <div>
                                <x-input-label for="featured_image" value="รูปภาพ" />
                                <label class="block mt-2">
                                    <span class="sr-only">เลือกรูปภาพ</span>
                                    <input type="file" id="featured_image" name="featured_image"
                                        accept=".jpg, .jpeg, .png"
                                        class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700
                                        hover:file:bg-violet-100
                                    " />
                                </label>
                                <div class="shrink-0 my-2">
                                    <img id="featured_image_preview" class="h-64 w-128 object-cover rounded-md"
                                        src="{{ isset($post) ? Storage::url($post->featured_image) : '' }}"
                                        alt="Featured image preview" />
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                            </div>
    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('บันทึก') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // create onchange event listener for featured_image input
            document.getElementById('featured_image').onchange = function(evt) {
                const [file] = this.files
                if (file) {
                    // if there is an image, create a preview in featured_image_preview
                    document.getElementById('featured_image_preview').src = URL.createObjectURL(file)
                }
            }
        </script>
    </x-app-layout>
    
</body>
</html>