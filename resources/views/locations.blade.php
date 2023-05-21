<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpaceX | Locations</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-black uppercase text-white">
    <div class="overflow-x-hidden">

        {{-- Hero section --}}

        <section class="pt-8 pb-12 lg:pb-0 lg:h-screen overflow-y-hidden" id="locations-hero">
            @include('components.navigation')
            <div>
                <div class="container font-bold text-[46px] lg:text-[75px] leading-none pt-20 lg:pt-48"
                    data-aos="fade-right" data-aos-duration="500">
                    <h1 class="mb-8 lg:mb-0 italic">Our<br /> <span class="text-[#6BC3FE]">Starship</span><br />
                        Locations</h1>
                    <p class="text-[10px] mt-4">OUR QUICK GATEWAY TO THE WORLD.</p>
                </div>
            </div>
        </section>

        {{-- Start info section with video and info --}}

        <section>
            <div class="py-12 lg:py-32 container lg:flex lg:gap-24 overflow-x-hidden">
                <div data-aos="fade-right" data-aos-duration="500">
                    <video playsinline autoplay muted loop class="w-[421px] h-[421px]">
                        <source src="{{ asset('/videos/rocket.mp4') }}">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="border-l-2 border-white p-11 my-auto mt-12" data-aos="fade-left" data-aos-duration="500">
                    <h2 class='text-[30px] lg:text-[50px]'>{{ count($locations) }} starport<br />locations</h2>
                    <p class="mt-5 max-w-[475px] text-[15px] font-normal narrow">
                        THE SPACE SUIT’S OUTER LAYER IS MADE WITH FLAME-RESISTANT MATERIALS. GRAY PARTS ARE DIFFERENT
                        VERSIONS OF NOMEX AND THE WHITE MATERIAL IS A TEFLON FABRIC.
                    </p>
                </div>

            </div>

        </section>

        {{-- Start info section about our locations --}}

        <section>
            <div class="py-12 lg:py-24 container uppercase lg:flex justify-between">
                <div>
                    <h2 class="text-[30px] lg:text-[50px]" data-aos="fade-right" data-aos-duration="500">Our Locations
                    </h2>
                    <p class="mt-5 narrow max-w-[485px]" data-aos="fade-right" data-aos-duration="500">DEVELOPMENT AND
                        MANUFACTURING OF STARSHIP TAKES PLACE AT STARBASE, ONE OF THE WORLD’S FIRST COMMERCIAL
                        SPACEPORTS DESIGNED FOR ORBITAL MISSIONS.</p>
                    <div class="mt-10" data-aos="fade-up" data-aos-duration="500">
                        @foreach ($locations->take(5) as $location)
                            <div class="flex justify-between mt-4 border-b border-b-[#424242] w-full lg:w-[388px]">
                                <p class="narrow-bold">{{ $location->name }}</p>
                                <p class="text-[#4E4E4E] narrow-bold uppercase">
                                    @if ($location->is_on_water)
                                        Water-platform
                                    @else
                                        Land-platform
                                    @endif
                                </p>
                            </div>
                        @endforeach
                        @if ($locations->count() > 5)
                            <button id="load-more"
                                class="flex justify-between mt-4 border-b border-b-[#424242] narrow-bold uppercase">
                                Load more<img src="{{ asset('/images/arrow_down.svg') }}" class="inline ml-3 mt-2">
                            </button>
                        @endif
                    </div>
                </div>
                <div class="mt-10 lg:mt-0" data-aos="fade-up-left" data-aos-duration="500">
                    <img src="{{ asset('/images/locations_rocket.png') }}">
                </div>

            </div>

        </section>

        {{-- Start info section about travel options --}}

        <section>
            <div class="container py-12 lg:py-24">
                <div class="lg:flex justify-between items-center">
                    <h2 class="text-[30px] lg:text-[50px]" data-aos="fade-left" data-aos-duration="500">Travel<br />
                        options</h2>
                    <p class="narrow max-w-[455px] p-8 pr-0 border-l-2 border-white mt-10 lg:mt-0" data-aos="fade-right"
                        data-aos-duration="500">STARSHIELD LEVERAGES SPACEX'S STARLINK TECHNOLOGY AND LAUNCH CAPABILITY
                        TO SUPPORT NATIONAL SECURITY EFFORTS. WHILE STARLINK IS DESIGNED FOR CONSUMER AND COMMERCIAL
                        USE, STARSHIELD IS DESIGNED FOR GOVERNMENT USE, WITH AN INITIAL FOCUS ON THREE AREAS:</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-12 justify-between mt-12 lg:mt-32 mb-12 lg:mb-0"
                    data-aos="fade-up" data-aos-duration="500">
                    <div class="flex flex-col lg:flex-row items-center gap-16">
                        <img src="{{ asset('/images/car.svg') }}">
                        <h2>By car</h2>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center gap-16">
                        <img src="{{ asset('/images/boat.svg') }}">
                        <h2>By boat</h2>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center gap-16">
                        <img src="{{ asset('/images/helicopter.svg') }}">
                        <h2>By helicopter</h2>
                    </div>
                </div>
            </div>
        </section>

        {{-- Start CTA section about us --}}

        <section id="about-background-2">
            <div class="container py-48 lg:py-72" data-aos="fade-right" data-aos-duration="500"
                data-aos-anchor-placement="top-center">
                <h2 class="text-[30px] lg:text-[50px]">About us<br />spacex</h2>
                <a href={{ route('about') }}><button
                    class="black-button py-3 px-5 border-2 border-white uppercase mt-12">learn more</button></a>
            </div>
        </section>

        {{-- Inlcude Scheduled footer --}}
        @include('components.footer')
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Load more button script to show all locations --}}

    <script>
        AOS.init();
        const loadMoreButton = document.getElementById('load-more');
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', () => {
                const locations = @json($locations);
                const locationHtml = locations.slice(5).map(location => `
                        <div class="flex justify-between mt-4 border-b border-b-[#424242] lg:w-[388px]">
                            <p class="narrow-bold">${location.name}</p>
                            <p class="text-[#4E4E4E] narrow-bold uppercase">${location.is_on_water ? 'Water-platform' : 'Land-platform'}</p>
                        </div>
                    `).join('');
                loadMoreButton.style.display = 'none';
                loadMoreButton.insertAdjacentHTML('beforebegin', locationHtml);
            });
        }
    </script>
</body>

</html>
