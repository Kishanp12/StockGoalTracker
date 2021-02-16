<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StockTrack</title>

    <link rel="stylesheet" href="/css/app.css">
    @livewireStyles
</head>
{{-- NavBar --}}
<body class="font-sans text-white bg-gray-300">
    <nav class="bg-gray-900 border-b border-gray-800">
        <div class="container flex flex-col items-center justify-between px-4 py-6 mx-auto md:flex-row">

            {{-- Left Side --}}
            <div class="flex flex-col items-center md:flex-row">
                <div>
                    <a href="">
                         <div>
                             Stock Tracker
                         </div>
                    </a>
                </div>
            </div>
             {{-- Right Side --}}
            <div class="flex flex-col items-center md:flex-row">
                <livewire:search-drop-down>
            </div>
        </div>
    </nav>
    {{-- End NavBar --}}
    @yield('content')
    @livewireScripts
</body>
</html>
