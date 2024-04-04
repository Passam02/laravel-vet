<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

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
            <div class="py-8 info lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">Contact Us</h2>
                <p class="font-normal text-center sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            </div>
            <div class="pb-8 lg:pb-16 px-4 mx-auto max-w-screen-lg grid sm:grid-cols-3 grid-cols-1 gap-10">
                <div class="col-span-1 sm:col-span-2 pt-16">
                    <form action="#" class="space-y-8">
                        <div>
                            <label for="email" class="block mb-2 text-md font-medium">Your email</label>
                            <input type="email" id="email" class="shadow-sm bg-gray-700 text-gray-300 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@mail.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 text-md font-medium">Subject</label>
                            <input type="text" id="subject" class="block p-3 w-full text-gray-300 text-sm bg-gray-700 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block mb-2 text-md font-medium">Your message</label>
                            <textarea id="message" rows="6" class="block p-2.5 w-full text-gray-300 text-sm bg-gray-700 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..." required></textarea>
                        </div>
                        <button type="submit" class="py-3 but px-5 text-sm font-medium text-gray-300 text-center bg-gray-700 rounded-lg sm:w-fit hover:bg-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Send message</button>
                    </form>
                </div>
                <div class="col-span-1 grid mx-auto">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 info flex items-center justify-center rounded-lg text-gray-500 bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </div>
                        <h2 class="mb-4 text-2xl tracking-tight font-bold text-center pt-2">Company information:</h2>
                        <p class="mb-8 font-normal text-center sm:text-xl">Themesberg LLC <br> Tax id: USXXXXXX</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 info flex items-center justify-center rounded-lg text-gray-500 bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                            </svg>
                        </div>
                        <h2 class="mb-4 text-2xl tracking-tight font-bold text-center pt-2">Address:</h2>
                        <p class="mb-8 font-normal text-center sm:text-xl">SILVER LAKE, United States 1941 Late Avenue <br> Zip Code/Postal code:03875</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 info flex items-center justify-center rounded-lg text-gray-500 bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                            </svg>
                        </div>
                        <h2 class="mb-4 text-2xl tracking-tight font-bold text-center pt-2">Call us:</h2>
                        <p class="mb-8 font-normal text-center sm:text-xl">Call us to speak to a member of our team. We are always happy to help.</p>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')
    </body>
</html>
