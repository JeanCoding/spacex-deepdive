<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SpaceX | About</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-black uppercase text-white">
        <section class="pt-8 pb-12 lg:pb-0 lg:h-screen overflow-y-hidden" id="hero">
            @include('components.navigation')
            <div>
                <div class="container font-bold text-[50px] lg:text-[75px] leading-none pt-20 lg:pt-48" data-aos="fade-right" data-aos-duration="500">
                    <h1 class="mb-8 lg:mb-0 italic">About<br /> <span class="text-[#6BC3FE]">Starship</span><br /> SPACEX</h1>
                    <p class="text-[10px] mt-4">SERVICE TO EARTH ORBIT, MOON, MARS AND BEYOND</p>
                </div>
            </div>
        </section>
        <section>
            <div class="py-24 container lg:flex justify-between">
                <div>
                    <h2 class='text-[30px] lg:text-[50px]' data-aos="fade-right" data-aos-duration="500">Our starship</h2>
                    <p class="mt-5 max-w-[475px] text-[15px] font-normal narrow" data-aos="fade-right" data-aos-duration="500">
                        SPACEX’S STARSHIP SPACECRAFT AND SUPER HEAVY ROCKET – COLLECTIVELY REFERRED TO AS STARSHIP – REPRESENT A FULLY REUSABLE TRANSPORTATION SYSTEM DESIGNED TO CARRY BOTH CREW AND CARGO TO EARTH ORBIT, THE MOON, MARS AND BEYOND.
                    </p>
                    <div class="mt-10" data-aos="fade-up" data-aos-duration="500">
                        <div class="flex justify-between border-b border-b-[#424242]">
                            <p class="narrow-bold">Thrust</p>
                            <p class="narrow-bold">230TF <span class="text-[#4E4E4E] narrow-bold">/ 507 KLBF</span></p>
                        </div>
                        <div class="flex justify-between mt-4 border-b border-b-[#424242]">
                            <p class="narrow-bold">Height</p>
                            <p class="narrow-bold">50m <span class="text-[#4E4E4E] narrow-bold">/ 164 FT</span></p>
                        </div>
                        <div class="flex justify-between mt-4 border-b border-b-[#424242]">
                            <p class="narrow-bold">Diameter</p>
                            <p class="narrow-bold">9m <span class="text-[#4E4E4E] narrow-bold">/ 29.5 FT</span></p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 lg:mt-0" data-aos="fade-up" data-aos-duration="500">
                    <img src="{{ asset('/images/about_rocket.png') }}">
                </div>

            </div>

        </section>

        <section id="about-background-2">
            <div class="container py-48 lg:py-72" data-aos="fade-right" data-aos-duration="500" data-aos-anchor-placement="top-center">
                <h2 class="text-[30px] lg:text-[50px]">Our<br />Starport<br />Locations</h2>
                <a href="{{ route('locations') }}">
                    <button class="white-button py-3 px-5 border-2 border-white uppercase mt-12">Locations</button>
                </a>
            </div>
        </section>

        <section>
            <div class="!mt-12 !lg:mt-[-50px] container lg:flex justify-between items-center">
                <div>
                    <h2 class='text-[24px] lg:text-[50px] whitespace-nowrap' data-aos="fade-right" data-aos-duration="500">Your spacesuit</h2>
                    <p class="mt-5 max-w-[475px] text-[15px] font-normal narrow" data-aos="fade-right" data-aos-duration="500">
                        THE SPACE SUIT’S OUTER LAYER IS MADE WITH FLAME-RESISTANT MATERIALS. GRAY PARTS ARE DIFFERENT VERSIONS OF NOMEX AND THE WHITE MATERIAL IS A TEFLON FABRIC.
                    </p>
                    <div class="mt-10" data-aos="fade-up" data-aos-duration="500">
                        <div class="flex justify-between border-b border-b-[#424242]">
                            <p class="narrow-bold">Weight</p>
                            <p class="narrow-bold">70kg <span class="text-[#4E4E4E] narrow-bold">/ 154 lbs</span></p>
                        </div>
                        <div class="flex justify-between mt-4 border-b border-b-[#424242]">
                            <p class="narrow-bold">Cold resistance</p>
                            <p class="narrow-bold">-156 C <span class="text-[#4E4E4E] narrow-bold">/ 249 F</span></p>
                        </div>
                        <div class="flex justify-between mt-4 border-b border-b-[#424242]">
                            <p class="narrow-bold">Diameter</p>
                            <p class="narrow-bold">13 <span class="text-[#4E4E4E] narrow-bold">layers </span></p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-center">
                    <img src="{{ asset('/images/spaceman.png') }}">
                </div>

            </div>
        </section>

        <div class="mt-[-100px] lg:mt-[-200px]">
            @include('components.scheduled_flights')
            @include('components.footer')
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @vite('resources/js/app.js')
    </body>
</html>