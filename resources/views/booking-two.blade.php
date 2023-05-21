@extends('components.layouts.booking')
@section('content')
<h2 class="text-[30px] mb-[12px]">STEP 2.</h2>
<span class="text-[16px]">CHOOSE YOUR <span class="text-[#6BC3FE]">TRANSPORT</span><br> OPTION:</span>
<div class="mt-[25px] uppercase">
    @if (!$is_on_water)
        <div class="flex">
            <input id="radio-one" type="radio" name="option" value="yes" class="mb-2 cursor-pointer">
            <label for="radio-one" class="cursor-pointer">Public transport</label>
        </div>
        <div class="flex">
            <input id="radio-two" type="radio" name="option" value="no" class="mb-2 cursor-pointer">
            <label for="radio-two" class="cursor-pointer">Helicopter</label>
        </div>
        <div class="flex">
            <input id="radio-two" type="radio" name="option" value="no" class="mb-2 cursor-pointer">
            <label for="radio-two" class="cursor-pointer">Car</label>
        </div>
    @else
        <div class="flex">
            <input id="radio-one" type="radio" name="option" value="yes" class="mb-2 cursor-pointer">
            <label for="radio-one" class="cursor-pointer">Boat</label>
        </div>
    @endif
    </div>
    
    <a href="{{ route('booking.three', ['id' => $id]) }}#white-box" id="form-button-continue">
    <button type="submit" class="group white-button border-2 border-black rounded-full px-[16px] py-[6px] italic font-bold mb-2 items-center flex mt-[30px]">
        CONTINUE<span class="fill-black group-hover:fill-white transition">
            @include('components.icons.arrow_right')
        </span>
    </button>
</a>
@endsection