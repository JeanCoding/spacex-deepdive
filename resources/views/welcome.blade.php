<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SpaceX | Home</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-black">
        <div class="mt-8 h-screen overflow-y-hidden">
            @include('components.navigation')
            <section id="filter" class="text-white">
                <div class="container lg:flex justify-between uppercase font-bold text-[50px] lg:text-[75px] leading-none pt-20 lg:pt-48">
                    <h1 class="mb-8 lg:mb-0 italic" data-aos="fade-right" data-aos-duration="500">EXPLORE<br /> <span class="text-[#6BC3FE]">ORBIT</span> WITH<br /> SPACEX</h1>
                    <div class="lg:w-[288px] flex items-center justify-center rounded-[32px] p-8 relative" data-aos="fade-up" data-aos-duration="500">
                        <form action="#cards" method="GET" class="w-full lg:w-auto text-[9px] text-center italic z-10">
                            <label>Departure</label>
                            <input type="text" name="departure" placeholder="Dubai" class="w-full lg:w-[165px] h-[25px] block text-black rounded-full p-2 mb-5 mt-1.5 text-center uppercase outline-none">

                            <label>Arrival</label>
                            <input type="text" name="arrival" placeholder="Amsterdam" class="w-full lg:w-[165px] h-[25px] block text-black rounded-full p-2 mb-5 mt-1.5 text-center uppercase outline-none">
                            <label>Travel date</label>
                            <input type="date" name="date" class="w-full lg:w-[165px] h-[25px] block text-black rounded-full p-2 mt-1.5 text-center uppercase">
                            <button type="submit" class="uppercase text-[9px] block bg-[#6BC3FE] py-[6px] px-4 mt-8 rounded-full glow-hover">Go!</button>
                        </form>
                        <div class="h-full w-full bg-[#474747] p-40 absolute z-0 rounded-[32px] blurred"></div>
                    </div>
                </div>
            </section>
        </div>
        <section id="video-overlay" class="relative">
            <img width="100%" class="h-[300px] lg:h-[665px]" src="{{ asset('/images/video_overlay.png') }}">
            <button id="play-button" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 lg:w-auto"><img src="{{ asset('/images/play_button.png') }}"></button>
        </section>
        <section id="video" class="hidden">
            <iframe width="100%"  class="h-[300px] lg:h-[665px]" src="https://www.youtube.com/embed/zqE-ultsWt0" title="Starship | Earth to Earth" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </section>
        <section class="text-white text-2xl lg:text-[60px] font-bold relative">
            <div id="cards" class="container !mt-32">
                <h2 class="uppercase font-bold mb-8 lg:mb-24">Scheduled flights</h2>
                <div class="grid lg:grid-cols-2 lg:w-fit gap-24" data-aos="fade-up" data-aos-duration="500">
                    @foreach($flights as $flight)
                        @include('components.card')
                    @endforeach
                </div>
                <div class="flex gap-8 text-xs font-bold mt-20">
                    <button class="group black-button border border-white rounded-full px-3 py-[6px] italic icon-button" onclick="window.scrollTo(0, 0)">
                        FILTER
                        <span class="fill-white group-hover:fill-black transition">
                            @include('components.icons.arrow_up')
                        </span>
                    </button>
                    <a href="{{ route('home') }}">
                        <button class="black-button border border-white rounded-full px-3 py-[6px] italic">
                            RESET FILTER
                        </button>
                    </a>
                </div>
            </div>
            <img src="{{ asset('/images/blue_gradient.png') }}" class="absolute right-0 top-[-200px] z-[-10] h-[500px] lg:h-[1500px] blue-gradient hidden">
        </section>

        <section class="mt-12">
            <img src="{{ asset('/images/horizon.png') }}" class="w-full">
            <div class="w-full flex flex-col items-center" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-center">
                <div class="h-[120px] w-[2px] bg-white relative z-10"></div>
                <a href="{{ route('about') }}">
                    <button class="black-button py-2 px-6 uppercase border border-whiteo mt-10 w-fit text-white">About us</button>
                </a>
            </div>
        </section>
        @include('components.footer')

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @vite('resources/js/app.js')
    </body>

</html>
