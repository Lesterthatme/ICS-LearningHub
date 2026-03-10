<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css'])

</head>

<body>
    <header class="h-auto bg-gradient-to-r from-[#FA6800] to-[#EBEBEB] shadow-lg py-2">
        <div class="container flex flex-row justify-between text-white mx-auto">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/ICS-logo.svg') }}" alt="ICS logo" class="h-[90px]">
                <p class="hidden xl:block text-4xl font-bold text-shadow-md">Institute Of Computer Studies</p>
                <p class="xl:hidden text-4xl font-bold text-shadow-md">ICS</p>
            </div>

            <ul class="hidden sm:flex flex-row items-center gap-6 text-2xl font-bold">
                <li class="text-shadow-lg"><a href="#">Register</a></li>
                <li class="text-shadow-lg"><a href="#">Log-in</a></li>
                <li class="text-shadow-lg ms-3">
                    <button class="bg-[#07979C] p-3 rounded-2xl ">
                        <a href="#">Sing-up</a>
                    </button>
                </li>
            </ul>
           
        </div>


    </header>
</body>

</html>
