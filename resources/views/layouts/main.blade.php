<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/app.css">
    @livewireStyles
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index')}}">
                        <img class="w-10 h-10" src="{{asset('img/movieIcon.png')}}" alt="Movies" />
                    </a>

                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('series.index')}}" class="hover:text-gray-300">Series</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center mt-3 md:mt-0">

                 <livewire:search-drop-down />

                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img class="rounded-full w-8 h-8" src="{{asset('img/actor2.jpg')}}" alt="avator">
                    </a>
                </div>
            </div>


        </div>
    </nav>
    @yield('content')

    @livewireScripts
</body>
</html>
