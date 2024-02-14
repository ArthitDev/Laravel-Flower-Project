<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แสดงข้อมูล</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'แสดงข้อมูล' }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ 'ชื่อ' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $post->title }}
                            </p>
                        </div>
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ 'ประเภท' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $post->type }}
                            </p>
                        </div>
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ 'คำอธิบาย' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $post->content }}
                            </p>
                        </div>
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ 'รูปภาพ' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                <img class="h-64 w-128 rounded-md" src="{{ Storage::url($post->featured_image) }}"
                                    alt="{{ $post->title }}" srcset="">
                            </p>
                        </div>
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ 'สร้างเมื่อ' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $post->created_at }}
                            </p>
                        </div>
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ 'แก้ไขล่าสุดเมื่อ' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $post->updated_at }}
                            </p>
                        </div>
                        <a href="{{ route('posts.index') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md">กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>

</html>
