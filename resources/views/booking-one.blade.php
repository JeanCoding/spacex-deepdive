@extends('components.layouts.booking')
@section('content')
<h2 class="text-[30px] mb-[12px]">STEP 1.</h2>
<span class="text-[16px]">DO YOU OWN A <span class="text-[#6BC3FE]">CSFP</span><br> CERTIFICATE?</span>
<div class="mt-[25px]">
    <div class="flex">
        <input id="hide-certificate-button" type="radio" name="option" value="yes" class="mb-2 cursor-pointer">
        <label for="hide-certificate-button" class="cursor-pointer">YES</label>
    </div>
    <div class="cursor-pointer flex">
        <input id="hide-continue-button" type="radio" name="option" value="no" class="mb-2 cursor-pointer">
        <label for="hide-continue-button" class="cursor-pointer">NO</label>
    </div>
</div>

<a href="{{ route('booking.two', ['id' => $id]) }}#white-box" id="form-button-continue">
    <button type="submit" class="group white-button border-2 border-black rounded-full px-[16px] py-[6px] italic font-bold mb-2 items-center flex mt-[30px]">
    CONTINUE<span class="fill-black group-hover:fill-white transition">
        @include('components.icons.arrow_right')
    </span>
    </button>
</a>
<a href="{{ route('home') }}" class="hidden" id="form-button-certificate">
    <button type="submit" class="group white-button border-2 border-black rounded-full px-[16px] py-[6px] italic font-bold mb-2 items-center flex mt-[30px]">
    REQUEST<span class="fill-black group-hover:fill-white transition">
        @include('components.icons.arrow_right')
    </span>
    </button>
</a>
<span class="text-[7px] ml-2">WHAT IS A <a href="#" class="text-[#6BC3FE]">CSFP</a> CERTIFICATE?</span>
@endsection
