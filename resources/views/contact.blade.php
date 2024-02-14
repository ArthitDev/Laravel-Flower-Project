<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ติดต่อเรา</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    @vite('resources/css/app.css', 'resources/js/app.js')
    @vite('resources/css/Homepage.css')
    @vite('resources/css/font.css')
    @vite('resources/css/contact.css')
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
                            class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="/flower"
                            class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">รายการดอกไม้</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="block py-2 pl-3 pr-4 text-white text-xl bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">ติดต่อเรา</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w-full bg-cover bg-center"
        style="height:30rem; background-image: url('{{ asset('images/banner-4.jpg') }}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white italic text-4xl font-bold uppercase md:text-9xl head-text">ติดต่อเรา</h1>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="mb-8">
                            <h2 class="text-2xl pt-4 font-bold text-gray-800">
                                สามารถส่งข้อความหาเราได้ทุกเมื่อ!
                            </h2>
                            <p class="text-gray-600">
                                หากมีความคิดเห็นประการใดที่เป็นประโยชน์และอยากแบ่งปันให้กับเรา
                                เพื่อนำไปพัฒนาเว็บไซต์ของเรา สามารถส่งข้อความมาหาเรา
                                หรือ
                                <span class="text-blue-500 underline">ติดต่อได้ที่โซเชียลมีเดียด้านล่าง</span>.
                            </p>
                        </div>
                        <div class="icons-container">
                            <div class="wrapper">
                                <a href="https://www.facebook.com/MR.Arthit.Profile" class="icon facebook"
                                    target="_blank">
                                    <div class="tooltip">Facebook</div>
                                    <span><i class="fab fa-facebook-f"></i></span>
                                </a>
                                <a href="https://twitter.com/ArthitDev" class="icon twitter" target="_blank">
                                    <div class="tooltip">Twitter</div>
                                    <span><i class="fab fa-twitter"></i></span>
                                </a>
                                <a href="https://line.me/ti/p/~0998905700" class="icon line" target="_blank">
                                    <div class="tooltip">Line</div>
                                    <span><i class="fa-brands fa-line"></i></span>
                                </a>
                                <a href="https://github.com/ArthitDev" class="icon github" target="_blank">
                                    <div class="tooltip">Github</div>
                                    <span><i class="fab fa-github"></i></span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCfipXsHPTcd-5YoYV97X9fg" class="icon youtube"
                                    target="_blank">
                                    <div class="tooltip">Youtube</div>
                                    <span><i class="fab fa-youtube"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <form action="https://formsubmit.co/1bd6dd3782ee76ed10cc148753f82b14" method="POST"
                            class="space-y-4">
                            <input type="text" name="_honey" style="display:none">
                            <input type="hidden" name="_next" value="http://127.0.0.1:8000/contact">
                            <input type="hidden" name="_captcha" value="false">
                            <div class="space-y-2">
                                <h2 class="text-2xl font-bold text-gray-800">
                                    ส่งข้อความหาเรา
                                </h2>
                                <p class="text-gray-600">
                                    เราจะติดต่อกลับภายใน 24 ชั่วโมง
                                </p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="md:col-span-2">
                                    <input type="text"
                                        class="w-full max-w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 mb-3"
                                        id="ชื่อ" name="ชื่อ" placeholder="ชื่อ" required>
                                    <input type="text"
                                        class="w-full max-w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 mb-3"
                                        id="นามสกุล" name="นามสกุล" placeholder="นามสกุล" required>
                                    <input type="email"
                                        class="w-full max-w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 mb-3"
                                        id="อีเมล" name="อีเมล" placeholder="อีเมล" required>
                                    <input type="text"
                                        class="w-full max-w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 mb-3"
                                        id="เบอร์โทร" name="เบอร์โทร" placeholder="เบอร์โทรศัพท์" required>
                                    <textarea type="text" aria-placeholder="Type message here" name="ข้อความ"
                                        class="w-full max-w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 mb-3"
                                        placeholder="ข้อความ" required></textarea>
                                </div>
                            </div>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300 w-full">
                                ส่งข้อความ <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer class="bg-footer">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logo.png') }}" class="h-8 mr-3 footer-logo" alt="Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowers
                                List</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-md font-semibold text-gray-900 uppercase dark:text-white">ติดตามเรา
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-md font-semibold text-gray-900 uppercase dark:text-white">ข้อกำหนด
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/"
                            class="hover:underline">Flowers List™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 21 16">
                                <path
                                    d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd"
                                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
