<footer class="mt-12 lg:mt-40 pb-16 relative">
    <div class="container flex flex-col lg:flex-row justify-between lg:items-center relative">
        <div class="text-[#B4B4B4] uppercase">
            <a href="{{ route('home') }}" class="absolute z-10">
                <img src="{{ asset('/images/spacex-logo.svg') }}" class="max-w-[230px]">
            </a>
            <p class="text-[10px] mt-10">SPACEX 2023™</p>
        </div>
        <div class="uppercase text-white font-bold mt-12 lg:mt-0">
            <ul>
                <a href="{{ route('home') }}" id="footer-text"><li class="mb-1">Home</li></a>
                <a href="{{ route('home') }}#cards" id="footer-text" ><li class="mb-1">Book tickets</li></a>
                <a href="{{ route('home') }}#filter" id="footer-text" ><li class="mb-1">Filter</li></a>
                <a href="{{ route('locations') }}" id="footer-text" ><li class="mb-1">Locations</li></a>
                <a href="{{ route('about') }}" id="footer-text" ><li>About</li></a>
            </ul>
        </div>
    </div>
    <img src="{{ asset('/images/footer_shape.png') }}" class="absolute z-0 bottom-0 left-0 pointer-events-none">
</footer>