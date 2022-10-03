<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href={{ asset('images/logo.png') }} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>TechHub</title>
</head>

<body>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="" src={{ asset('images/fullLogo.png') }} alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">Welcome {{ auth()->user()->name }}!</span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage
                        Listings</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="hover:text-laravel"><i class="fa-solid fa-door-closed"></i>
                            Logout</button>

                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                </li>
            @endauth
        </ul>
    </nav>
    {{-- VIEW OUTPUT --}}
    <main>
        {{ $slot }}
    </main>

    <footer
        class="bottom-0 left-0 w-full gap-9 flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        <a href="/listings/create" class="bg-black text-white py-2 px-5">Post Job</a>
    </footer>
    <x-flash-message></x-flash-message>
</body>

</html>
