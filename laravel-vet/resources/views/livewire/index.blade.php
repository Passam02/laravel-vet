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

        @vite('resources/css/app.css')
        <style>
            header {
                background:url('https://images.unsplash.com/photo-1525970099798-c20710257d6e?q=80&w=1969&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            }
            .oferta{
                margin-left: 10%;
                padding-top: 8%;
                padding-bottom: 8%;
            }
            .btn-oferta{
                color: #1B5B31;
                padding-bottom: 10px;
                border-bottom: #1B5B31 2px solid;
                position: absolute;
                bottom: 0;
            }
            .btn-oferta:hover{
                color: #2d9a53;
                border-bottom: #2d9a53 2px solid;
            }
            .oferta-box-kafelek{
                margin-left: 10%;
                margin-right: 10%;
                padding-bottom: 10%;
            }
            .oferta-kafelek{
                background-color: white;
                border-radius: 25px;
                margin-bottom: 3rem;
                position: relative;
            }
            .bi{
                box-sizing: unset !important;
            }
            
        </style>
    </head>
    <body class="antialiased">
    

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Vet Clinic</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><p class="text-lg">Schedule Appointment<p></button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 text-2xl" aria-current="page">Home</a>
      </li>
      <li>
        <a href="/about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-2xl">About</a>
      </li>
      <li>
        <a href="/contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-2xl">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

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
        <footer class="relative pt-8 pb-6 bg-gray-900">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
              <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl fonat-semibold text-white">Let's keep in touch!</h4>
                <h5 class="text-lg mt-0 mb-2 text-white">
                  Find us on any of these platforms.
                </h5>
                <div class="mt-6 lg:mb-0 mb-6">
                  <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-instagram"></i></button>
                  </button>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                  <div class="w-full lg:w-4/12 px-4 ml-auto">
                    <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
                    <ul class="list-unstyled">
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">About Us</a>
                      </li>
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">Blog</a>
                      </li>
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">Help Animals</a>
                      </li>
                    </ul>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
                    <ul class="list-unstyled">
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">Diplomas</a>
                      </li>
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">Terms &amp; Conditions</a>
                      </li>
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">Privacy Policy</a>
                      </li>
                      <li>
                        <a class="text-white hover:text-Gray-800 font-semibold block pb-2 text-sm">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
    </body>
</html>
