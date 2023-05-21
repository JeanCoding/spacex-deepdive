    <div class="bg-[#272727] p-7 rounded-[20px] max-w-[414px] card text-white ml-auto">
        <div class="flex justify-between uppercase">
            <div>
                <img src="{{ asset('/images/plane_up.svg') }}" class="mb-3 w-8">
                <p class="text-xs">{{ $flight->departure->name }}<p> <!-- TODO; uit database laten komen -->
                <h3 class="text-2xl">{{ substr($flight->departure->name, 0, 3) }}</h3> <!-- TODO; uit database laten komen -->
            </div>
            <div>
                <img src="{{ asset('/images/plane_down.svg') }}" class="mb-3 w-8">
                <p class="text-xs">{{ $flight->arrival->name }}<p> <!-- TODO; uit database laten komen -->
                <h3 class="text-2xl">{{ substr($flight->arrival->name, 0, 3) }}</h3> <!-- TODO; uit database laten komen -->
            </div>
        </div>

        <div class="w-full card-line my-8 relative">
            <div class="w-1/2 card-line-blue"></div>
            <img src="{{ asset('/images/rocket.svg') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        </div>

        <div class="flex justify-between relative">
            <div class="text-xs font-bold">
                <p>{{ $flight->date }}</p> <!-- TODO; uit database laten komen -->
                <p class="text-[#CDCDCD] mt-1 text-[8px] poppins">Date</p>
            </div>
            <div class="absolute left-1/2 transform -translate-x-1/2">
                <div class="bg-[#3BE05C] px-2 py-1 rounded-full leading-none text-[9px] font-bold">{{ $flight->co2 }}<span>KG</span></div>
                <p class="text-[#CDCDCD] text-[8px] text-center mt-2 leading-none poppins">Totale CO2</p>
            </div>
            <div class="text-xs font-bold">
                <p>00:30</p> <!-- TODO; uit database laten komen -->
                <p class="text-[#CDCDCD] mt-1 text-[8px] poppins">AM</p>
            </div>
        </div>
    </div>