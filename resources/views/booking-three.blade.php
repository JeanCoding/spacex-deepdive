{{-- CO2 footprint page --}}

@extends('components.layouts.booking')
@section('content')
<h2 style="line-height: 36px;" class="text-[30px] mb-10">STEP 3. <br>YOUR <span class="text-[#6BC3FE]">CO2</span> FOOTPRINT: </h2>
<div class="flex">
    <div>
        <p class="text-xs mb-4">ROUTE TO STARPORT: <span style="box-shadow: 0px 4px 23px 1px rgba(59, 224, 92, 0.48);" class="bg-[#3BE05C] text-center mb-3 px-2 py-1 rounded-full leading-none text-[9px] text-white font-bold ml-4">{{ random_int(10, 66) }}KG</span></p>
        <p class="text-xs">FLIGHT EMISSION: <span style="box-shadow: 0px 4px 23px 1px rgba(59, 224, 92, 0.48);" class="bg-[#3BE05C] px-2 py-1 rounded-full leading-none text-[9px] text-white font-bold ml-4">{{ random_int(550, 1689) }}KG</span></p>
    </div>
</div>
<hr class="h-px mr-20 my-4 border-0 dark:bg-black">
<div class="flex items-center">
    <span class="text-xs">ENVIROMENTAL <br>FRIENDLY RATING:</span>
    <span style="box-shadow: 0px 4px 23px 1px rgba(59, 224, 92, 0.48);" class="bg-[#3BE05C] ml-8 px-3 py-2 rounded-full leading-none text-[9px] text-white font-bold\">
        <svg class="mb-1" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.375 1.28701C4.53281 1.28701 2.97422 2.32143 2.44453 3.74753C3.23203 3.40607 4.12031 3.21526 5.0625 3.21526H7.125C7.33125 3.21526 7.5 3.35988 7.5 3.53663C7.5 3.71339 7.33125 3.85801 7.125 3.85801H6.75H5.0625C4.67344 3.85801 4.29609 3.89617 3.93281 3.96647C3.32578 4.08498 2.76094 4.29588 2.25938 4.58311C0.897656 5.36043 0 6.68811 0 8.19656V8.51794C0 8.78508 0.250781 9 0.5625 9C0.874219 9 1.125 8.78508 1.125 8.51794V8.19656C1.125 7.21838 1.61016 6.33862 2.38594 5.72198C2.85 7.23847 4.46016 8.35725 6.375 8.35725H6.39844C9.49453 8.34319 12 5.72801 12 2.50422C12 1.64856 11.8242 0.835077 11.5055 0.101942C11.4445 -0.0366512 11.2078 -0.0306254 11.1258 0.099933C10.6852 0.806957 9.81328 1.28701 8.8125 1.28701H6.375Z" fill="white" /></svg>
        {{ random_int(50, 96) }}
    </span>
</div>
<a href="{{ route('booking.four', ['id' => $id]) }}#white-box">
    <button type="submit" class="group white-button border-2 border-black rounded-full px-[16px] py-[6px] italic font-bold mb-2 items-center flex mt-[30px]">
        CONTINUE<span class="fill-black group-hover:fill-white transition">
            @include('components.icons.arrow_right')
        </span>
    </button>
</a>
@endsection