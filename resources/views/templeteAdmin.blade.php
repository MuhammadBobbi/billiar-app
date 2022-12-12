<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Billiar | @yield('title')</title>
</head>
<body class="relative bg-gray-200">
    <header class="w-full bg-green-700">
        <nav class="flex p-4 mb-2">
            <div class="">
                <img src="" alt="">
                <h1 class="font-bold text-xl p-2">Billiar.Com</h1>
            </div>
            <ul class="flex gap-8 items-center place-content-center m-auto font-semibold ">
                <li class="p-2 hover:text-white"><a href="homeadmin">Home</a></li>
                <li class="p-2 hover:text-white"><a href="create">Create</a></li>
                <li class="p-2 hover:text-white"><a href="mybooking">My Booking</a></li>
                <li class="p-2 hover:text-white"><a href="contact">Contact</a></li>
            </ul>
            <div class="">
                <a href="" class="p-2 font-semibold">LogOut</a>
            </div>
        </nav>
    </header>
    <div class=" container mx-auto px-10">
        @yield('konten')
    </div>
    
        <footer class="absolute w-full bg-green-700 p-4">
            <p class="text-center">Copyrigh-2022</p>
        </footer>
    
</body>
</html>