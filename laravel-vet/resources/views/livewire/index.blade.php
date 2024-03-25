<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        <style>
            header {
                background:url('https://images.unsplash.com/photo-1525970099798-c20710257d6e?q=80&w=1969&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            }
        </style>
    </head>
    <body class="antialiased">
        <nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent"></nav>

        <header id="up" class="bg-no-repeat bg-center bg-cover h-screen relative">
            <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
                <div class="mx-2 text-center">
                    <h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl pb-12">
                        Veterynary Clinic
                    </h1>
                    <h2 class="text-gray-200 font-extrabold text-2xl xs:text-3xl md:text-4xl leading-tight pb-20">
                        4 Bishop Street Waterford, MI 48329
                    </h2>
                    <div class="inline-flex">
                        <a href='about'>
                            <button class="p-2 my-5 mx-2 bg-indigo-700 hover:bg-indigo-800 font-bold text-white rounded border-2 border-transparent hover:border-indigo-800 shadow-md transition duration-500 md:text-xl">Learn More</button>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
