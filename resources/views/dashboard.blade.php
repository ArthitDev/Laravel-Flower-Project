<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แผงความคุม</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    @vite('resources/css/font.css')
    <style>
        * {
            font-family: "Prompt-Medium";
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('แผงความคุม') }}
            </h2>
        </x-slot>
        <div class="py-12 bg-black-ex">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class=" p-4 rounded card-container">
                            @php
                                $Count = \App\Models\Count::count();
                            @endphp

                            <div class="card mb-3 shadow-lg border-primary p-4 bg-black-ex rounded-lg">
                                <div class="card-body text-black">
                                    <h5 class="card-title">รายการดอกไม้ทั้งหมด</h5>
                                    <p class="card-text">{{ $Count }}<a> รายการ</a></p>

                                </div>
                            </div>

                            @php
                                $typeCounts = \App\Models\Count::select('type', \DB::raw('count(*) as count'))
                                    ->groupBy('type')
                                    ->get();
                                
                                // สร้างอาเรย์สีที่เป็นตัวเลือก
                                $colors = ['bg-blue-500', 'bg-red-500', 'bg-gray-500'];
                            @endphp

                            @foreach ($typeCounts as $index => $typeCount)
                                @php
                                    // เลือกสีจากอาเรย์สีโดยใช้สุ่มหรือเลือกตามลำดับ
                                    $colorClass = $colors[$index % count($colors)];
                                @endphp

                                <div class="card mb-3 rounded-lg shadow-lg border-primary p-4 {{ $colorClass }}">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">
                                            {{ $typeCount->type }}
                                        </h5>
                                        <p class="card-text">{{ $typeCount->count }}<a> รายการ</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
