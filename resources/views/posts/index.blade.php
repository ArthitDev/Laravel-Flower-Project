<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายการข้อมูล</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ 'แสดงข้อมูล' }}
                </h2>
                <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">เพิ่มข้อมูล</a>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">แก้ไขล่าสุด
                                    </th>
                                    <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">ชื่อ</th>
                                    <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">ประเภท</th>
                                    <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">รูปภาพ</th>
                                    <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($posts as $post)
                                    <tr>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                            {{ $post->updated_at }}</td>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                            {{ $post->title }}</td>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                            {{ $post->type }}</td>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                            <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                alt="{{ $post->title }}" width="100">
                                        </td>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                            <button
                                                onclick="window.location.href = '{{ route('posts.show', $post->id) }}'"
                                                class="border  border-blue-500 hover:bg-blue-500 text-black hover:text-white px-4 py-2 rounded-md">ดูข้อมูล</button>
                                            <button
                                                onclick="window.location.href = '{{ route('posts.edit', $post->id) }}'"
                                                class="border  border-yellow-500 hover:bg-yellow-500 text-black hover:text-white px-4 py-2 rounded-md">แก้ไข</button>
                                            <form method="post" action="{{ route('posts.destroy', $post->id) }}"
                                                class="inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="border  border-red-500 hover:bg-red-500 text-black hover:text-white px-4 py-2 rounded-md">ลบ</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </x-app-layout>

</body>

</html>
