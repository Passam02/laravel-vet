<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

        @vite('resources/css/app.css')
        <link href="{{ asset('css/filament/contact.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @include('layouts.navbar')
        <section style="background-color: #F5F0EC;">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">Contact Us</h2>
                <p class="mb-8 lg:mb-16 font-light text-center sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium">Your email</label>
                        <input type="email" id="email" class="shadow-sm bg-gray-700 text-gray-300 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@mail.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium">Subject</label>
                        <input type="text" id="subject" class="block p-3 w-full text-gray-300 text-sm bg-gray-700 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium">Your message</label>
                        <textarea id="message" rows="6" class="block p-2.5 w-full text-gray-300 text-sm bg-gray-700 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..." required></textarea>
                    </div>
                    <button type="submit" class="py-3 but px-5 text-sm font-medium text-gray-300 text-center bg-gray-700 rounded-lg sm:w-fit hover:bg-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Send message</button>
                </form>
            </div>
        </section>
        @include('layouts.footer')
    </body>
</html>
