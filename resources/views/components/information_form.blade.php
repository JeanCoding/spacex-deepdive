{{-- Passenger Information Form --}}

<form method="GET" action="{{ route('booking.finish', ['id' => $id]) }}#white-box">

    <div class="flex gap-5 mb-5">
        <div>
            <label class="text-xs italic mb-4 ml-3">First name</label><br />
            <input type="text" name="first_name" class="w-[140px] outline-none border-2 p-2 text-[10px] booking-input-shadow border-[#6BC3FE] rounded-full" required>
        </div>

        <div>
            <label class="mb-4 text-xs italic ml-3">Last name</label><br />
            <input type="text" name="last_name" class="w-[140px] outline-none border-2 p-2 text-[10px] booking-input-shadow border-[#6BC3FE] rounded-full" required>
        </div>
    </div>

    <div class="mb-4">
        <label class="mb-4 text-xs italic ml-3">E-mail</label><br />
        <input type="email" name="email" class="w-[300px] outline-none border-2 p-2 text-[10px] booking-input-shadow border-[#6BC3FE] rounded-full mb-2.5" required><br />
    </div>

    <div class="flex gap-3 items-center mt-8">
        <button class="uppercase bg-white rounded-full w-6 h-6 pt-0.5 input-shadow">
            <img src="{{ asset('/images/plus.svg') }}" class="inline mb-2 ml-[1px] w-3">
        </button>
        <p class="uppercase text-xs pt-1">Add a passenger</p>
    </div>

    <div class="flex gap-3 items-center mt-5">
        <input type="radio" id="radio" class="shrink-0" required>
        <label class="uppercase text-xs" for="radio">I agree with the terms of service</label>
    </div>

    <button type="submit" class="group white-button border-2 border-black rounded-full px-[16px] py-[6px] italic font-bold mb-2 items-center flex mt-[30px]">
        CONTINUE<span class="fill-black group-hover:fill-white transition">
            @include('components.icons.arrow_right')
        </span>
    </button>
</form>