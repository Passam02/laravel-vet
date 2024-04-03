<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        @vite('resources/css/app.css')
        <link href="{{ asset('css/filament/index.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @include('layouts.navbar')
        <header id="up" class="bg-no-repeat bg-center bg-cover h-screen relative">
            <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
                <div class="mx-2 text-center">
                    <h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl pb-12">
                        Veterinary Clinic
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
        <div style="background-color: #F5F0EC;">
            <div class="pb-20">
                <div class="grid sm:grid-cols-2 grid-cols-1" style="--bs-gutter-x: 0">
                    <div class="oferta row-span-6">
                        <h6 class='text-2xl'>Offer</h6>
                        <h1 class="font-bold text-4xl xs:text-5xl md:text-6xl py-4">We Work Complex</h1>
                        <h5 class="text-2xl xs:text-2xl md:text-3xl">We offer complete service for all animals. We are using latest technologies to assure profesional medical treatment  </h5>
                    </div>                              
                </div>
            </div>
            <div class="oferta-box-kafelek">
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-20 justify-between">
                    <div class="oferta-kafelek px-5 pt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="my-4" width="44" height="44" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
                            <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                            <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                        </svg>
                        <h1 class='text-4xl pb-10'>Profesional equipment</h1>
                        <h5 class="pb-20 text-2xl">Latest Medical equipment we use guarantee best precision and performance</h5>
                        <button type="button" class="btn p-0 my-5 btn-oferta flex flex-row">
                            <h5>
                                Find out more
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right pl-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="oferta-kafelek col-lg-4 px-5 pt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="my-4" width="44" height="44" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
                        </svg>
                        <h1 class='text-4xl pb-10'>Skilled personnel</h1>
                        <h5 class="pb-20 text-2xl">Our medical team consists of skilled staff that passed through all essential practices</h5>
                        <button type="button" class="btn p-0 my-5 btn-oferta flex flex-row">
                            <h5>
                                Find out more
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right pl-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="oferta-kafelek col-lg-4 px-5 pt-3">
                        <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <h1 class='text-4xl pb-10'>Years on market</h1>
                        <h5 class="pb-20 text-2xl">Our Vetelinary clinic has been open since 2004, we know what we are doing</h5>
                        <button type="button" class="btn p-0 my-5 btn-oferta flex flex-row">
                            <h5>
                                find out more
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right pl-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
