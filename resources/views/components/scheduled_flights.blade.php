<section class="text-white text-2xl mt-32 lg:mt-48 lg:text-[60px] font-bold relative" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-center" data-aos-offset="50">
    <div id="cards" class="container">
        <h2 class="uppercase font-bold mb-8 lg:mb-24">Scheduled flights</h2>
        <div class="grid lg:grid-cols-2 lg:w-fit gap-24">
            @foreach($flights as $flight)
                @include('components.card')
            @endforeach
        </div>
    </div>
    <img src="{{ asset('/images/blue_gradient.png') }}" class="absolute right-0 top-[-200px] z-[-10] h-[500px] lg:h-[1500px] blue-gradient hidden">
</section>