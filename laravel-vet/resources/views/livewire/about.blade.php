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
        <link href="{{ asset('css/filament/about.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @include('layouts.navbar')
        <div style="background-color: #F5F0EC;">
            <div class="py-20">
                <div class="grid sm:grid-cols-3 grid-cols-1 cont" style="--bs-gutter-x: 0">
                    <div class="oferta col-span-2 py-10">
                        <h1 class="font-bold text-4xl xs:text-5xl md:text-6xl pb-16">About us</h1>
                        <h5 class="text-2xl xs:text-2xl md:text-3xl">At our veterinary clinic, compassionate care is our priority. From routine check-ups to emergencies, our team is dedicated to ensuring the well-being of your beloved pets. With state-of-the-art facilities and experienced professionals, we provide comprehensive services tailored to meet the unique needs of every furry friend that walks through our doors.  </h5>
                    </div>                              
                </div>
                <div class="grid sm:grid-cols-2 grid-cols-1 auto-rows-fr" style="--bs-gutter-x: 0">
                    <div class="row-span-6 order-1">
                        <img class="size-full" src="{{asset('images\about-img-1.jpg')}}">
                    </div>
                    <div class="oferta row-span-6 order-2">
                        <h1 class="font-bold text-4xl xs:text-5xl md:text-6xl pb-16">Welcoming</h1>
                        <h5 class="text-2xl xs:text-2xl md:text-3xl">Welcome to our veterinary clinic, where tails wag and purrs abound! With a passion for animal welfare, our team is committed to providing top-notch care for your furry companions. From preventive medicine to surgical procedures, we offer a wide range of services to keep your pets healthy and happy. Our warm and welcoming environment ensures both you and your pets feel at ease, knowing they're in capable hands.  </h5>
                    </div>       
                    <div class="oferta row-span-6 order-4 sm:order-3">
                        <h1 class="font-bold text-4xl xs:text-5xl md:text-6xl pb-16">Family</h1>
                        <h5 class="text-2xl xs:text-2xl md:text-3xl">At our vet clinic, we understand that pets are family. That's why we go above and beyond to deliver personalized care that meets the unique needs of each animal. Whether it's a routine wellness exam or treatment for an illness, our experienced veterinarians and staff are dedicated to providing compassionate and comprehensive care. With cutting-edge technology and a deep love for animals, we strive to be your trusted partner in keeping your furry friends thriving.  </h5>
                    </div>                    
                    <div class="row-span-6 order-3 sm:order-4">
                        <img class="size-full" src="{{asset('images\about-img-2.jpg')}}">
                    </div>               
                    <div class="row-span-6 order-5">
                        <img class="size-full" src="{{asset('images\about-img-3.jpg')}}">
                    </div>
                    <div class="oferta row-span-6 order-6">
                        <h1 class="font-bold text-4xl xs:text-5xl md:text-6xl pb-16">Pets Well Being</h1>
                        <h5 class="text-2xl xs:text-2xl md:text-3xl">Your pet's well-being is our priority at our veterinary clinic. From the moment you walk through our doors, you'll experience a warm and welcoming atmosphere where both you and your furry companion are treated with kindness and respect. Our team of skilled veterinarians and support staff are committed to delivering high-quality care tailored to your pet's individual needs. Whether it's a check-up, vaccination, or specialized treatment, you can trust us to provide compassionate and professional service every step of the way.  </h5>
                    </div>                        
                </div>
                <div class="py-20">
                    <div class="flex flex-col text-4xl items-center py-20">
                        <div class="w-5/6 flex flex-col items-center">
                            <p class="w-5/6 sm:w-9/12"> "Outstanding care for my pet! The vet clinic staff are knowledgeable, friendly, and truly compassionate."</p>
                            <p class="pt-8 font-bold">~ Customer</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-4xl items-center py-20">
                        <div class="w-5/6 flex flex-col items-center">
                            <p class="w-5/6 sm:w-9/12">"Highly recommend this clinic! Exceptional service, clean facilities, and my pet received top-notch care."</p>
                            <p class="pt-8 font-bold">~ Customer</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-4xl items-center py-20">
                        <div class="w-5/6 flex flex-col items-center">
                            <p class="w-5/6 sm:w-9/12">"Fantastic experience! The veterinarians were thorough, explained everything clearly, and showed genuine concern for my pet's well-being."</p>
                            <p class="pt-8 font-bold">~ Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
