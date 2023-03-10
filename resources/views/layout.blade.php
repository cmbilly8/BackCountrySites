<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#6b8a6b",
                        },
                    },
                },
            };
        </script>
        <title>SiteFinder | Find your next campsite</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4 bg-slate-200">
            <a href="/"><img class="w-24" src="{{asset('images/bear-logo.jpg')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-xl">
                <li>
                    <a href="register.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i>Register</a>
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                </li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>

        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-20 mt-24 opacity-90 md:justify-center">
            <p class="ml-2 text-4xl">Get lost</p>
            <a href="/sites/create" class="absolute top-1/4 right-10 bg-black text-white py-2 px-5">Post a site</a>
        </footer>
        <x-flash-message />
    </body>
</html>
