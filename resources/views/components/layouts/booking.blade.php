<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpaceX | Booking</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-black overflow-x-hidden">
    <div class="overflow-x-hidden">
        <div class="mt-8">
            @include('components.navigation')
            <section class="text-white">
                <div
                    class="container lg:flex justify-between uppercase font-bold text-[50px] lg:text-[75px] leading-none pt-20 lg:pt-48 overflow-x-hidden">
                    <h1 class="mb-8 lg:mb-0 italic" data-aos="fade-right" data-aos-duration="500">Explore<br /> <span
                            class="text-[#6BC3FE]">Orbit</span> with<br />Spacex</h1>
                    <div class="w-full lg:w-1/2 z-10" data-aos="fade-left" data-aos-duration="500">
                        @include('components.personal-card') {{-- Your chosen flight card --}}
                    </div>
                </div>
            </section>
            <img src="{{ asset('/images/triangle_blur.svg') }}"
                class="absolute z-0 top-[60px] right-0 pointer-events-none">
            {{-- Booking information section --}}
            <section>
                <div class="container lg:flex !mt-32 lg:!mt-[270px] relative"> {{-- Tab on the left --}}
                    <img src="{{ asset('/images/background_booking.svg') }}" class="mb-3 hidden lg:block">
                    <div id="booking-section-text" class="lg:absolute">
                        <h2 class="text-white text-[30px] italic">HEY, <br><br> WHERE YOU <br> OFF TO NEXT?</h2>
                        <a href="{{ route('home') . '#cards' }}">
                            <button id="button-continue"
                                class="group black-button icon-button border border-white rounded-full px-[16px] text-white py-[6px] italic font-bold items-center flex mt-[80px]">
                                SEE FLIGHTS<span
                                    class="fill-white group-hover:fill-black transition">@include('components.icons.rocket')</span>
                            </button>
                        </a>
                    </div>
                    {{-- Start of the tab on the right side --}}
                    <div id="white-box"
                        class="bg-white w-full relative lg:ml-[-56px] rounded-[20px] p-6 lg:p-0 lg:rounded-r-[40px] mt-16 lg:mt-0">
                        <div
                            class="lg:absolute lg:top-1/2 lg:left-1/2 lg:transform lg:-translate-x-1/2 lg:-translate-y-1/2 lg:w-[350px]">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Inlcude Scheduled Flights & footer --}}

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
