{{-- Single flight card --}}

<div class="bg-[#272727] p-7 rounded-[20px]  w-full lg:w-[414px] card">
    <div class="flex justify-between uppercase">
        <div>
            <img src="{{ asset('/images/plane_up.svg') }}" class="mb-3 w-8">
            <p class="text-xs">{{ $flight->departure->name }}<p> 
            <h3 class="text-2xl">{{ substr($flight->departure->name, 0, 3) }}</h3> 
        </div>
        <div>
            <img src="{{ asset('/images/plane_down.svg') }}" class="mb-3 w-8">
            <p class="text-xs">{{ $flight->arrival->name }}<p> 
            <h3 class="text-2xl">{{ substr($flight->arrival->name, 0, 3) }}</h3> 
        </div>
    </div>

    <div class="w-full card-line my-8 relative">
        <div class="w-1/2 card-line-blue"></div>
        <img src="{{ asset('/images/rocket.svg') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
    </div>

    <div class="flex justify-between relative">
        <div class="text-xs font-bold">
            <p>{{ $flight->date }}</p>
            <p class="text-[#CDCDCD] mt-2 text-[8px] poppins">Date</p>
        </div>
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <div class="bg-[#3BE05C] px-2 py-1 rounded-full leading-none text-[9px] font-bold">{{ $flight->co2 }}<span>KG</span></div>
            <p class="text-[8px] text-[#CDCDCD] text-center mt-2 leading-none poppins">Totale CO2</p>
        </div>
        <a href="{{ route('booking.one', ['id' => $flight['id']]) }}#white-box">
            <button class="bg-[#6BC3FE] w-8 h-8 rounded-full flex items-center cart glow-hover">
                <img src="{{ asset('/images/cart.svg') }}" class="mx-auto w-4">
            </button>
        </a>
    </div>
</div>