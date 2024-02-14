<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายการดอกไม้</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    @vite('resources/css/app.css', 'resources/js/app.js')
    @vite('resources/css/list.css')
    @vite('resources/css/font.css')

</head>

<body>
    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" class="h-8 mr-3 nav-logo" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowers List</span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-xl  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="/flower"
                            class="block py-2 pl-3 pr-4 text-white text-xl bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">รายการดอกไม้</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="block py-2 pl-3 pr-4 text-xl  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">ติดต่อเรา</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 pl-3 pr-4 text-xl  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w-full bg-cover bg-center"
        style="height:30rem; background-image: url('{{ asset('images/banner-5.jpg') }}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white italic text-4xl font-bold uppercase md:text-9xl head-text">รายการดอกไม้</h1>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">อัพเดทล่าสุดเมื่อ
                                </th>
                                <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">ชื่อ</th>
                                <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">ประเภท</th>
                                <th class="border-b font-bold p-4 pl-8 pt-0 pb-3 text-black text-left">รูปภาพ</th>
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
                                        <div class="hover-img">
                                            <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                alt="{{ $post->title }}" width="100">
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $counter++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div id="imageModal" class="modal">
                        <img class="modal-content" id="expandedImg">
                        <span class="text-test close">
                            <button class="bg-red-700 hover:bg-red-500 text-white font-bold  px-2 rounded">
                                ปิด
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <script>
        // รับอิงรูปภาพทั้งหมดที่อยู่ใน <td>
        var thumbnails = document.querySelectorAll("td img");

        // รับอิงถึงโมดัลและรูปภาพใหญ่
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("expandedImg");

        // สร้างฟังก์ชันเพื่อเปิดโมดัลและแสดงรูปใหญ่
        function openModal(src) {
            modal.style.display = "block"; // แสดงโมดัล
            modalImg.src = src; // กำหนดรูปภาพใหญ่ให้แสดงในโมดัล
        }

        // เมื่อคลิกที่รูปที่อยู่ใน <td>
        thumbnails.forEach(function(thumbnail) {
            thumbnail.onclick = function() {
                var src = this.src; // รับ URL ของรูปที่คลิก
                openModal(src);
            };
        });

        // เมื่อคลิกที่ปุ่มปิด (x) ในโมดัล
        var closeButton = document.querySelector(".close");
        closeButton.onclick = function() {
            modal.style.display = "none"; // ปิดโมดัล
        }

        // เมื่อผู้ใช้คลิกนอกพื้นที่โมดัล
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none"; // ปิดโมดัล
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
