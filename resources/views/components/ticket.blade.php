<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceX | Your Ticket</title>
</head>

<body>
    <section class="text-black text-2xl lg:text-[60px] mt-8 font-bold">
        <div class="container">
            <div id="card" class=""> 
                <div class="bg-white p-5 rounded-[20px] max-w-[350px] card">
                    <div class="flex justify-between uppercase">
                        <div>
                            <img src="{{ asset('/images/plane_up_black.svg') }}" class="mb-3 w-8">
                            <p class="text-xs">{{ $flight->departure->name }}
                            <p> 
                            <h3 class="text-base">{{ substr($flight->departure->name, 0, 3) }}</h3> 
                        </div>
                        <div>
                            <img src="{{ asset('/images/plane_down_black.svg') }}" class="mb-3 w-8">
                            <p class="text-xs">{{ $flight->arrival->name }}
                            <p> 
                            <h3 class="text-base">{{ substr($flight->arrival->name, 0, 3) }}</h3> 
                        </div>
                    </div>

                    <div class="w-full card-line mt-4 mb-6 relative">
                        <div class="w-1/2 card-line-blue"></div>
                        <img src="{{ asset('/images/blackrocket.svg') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    </div>

                    <div class="flex justify-between relative">
                        <div class="text-xs font-bold">
                            <p>{{ $flight->date }}</p> 
                            <p class="text-black mt-2 text-[8px] poppins">Date</p>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2">
                            <div class="text-white bg-[#3BE05C] px-2 py-1 rounded-full leading-none text-[9px] font-bold">{{ $flight->co2 }}<span>KG</span></div>
                            <p class="text-[8px] text-center mt-2 leading-none poppins">Totale CO2</p>
                        </div>
                        <div class="text-xs font-bold">
                            <p>00:30</p> 
                            <p class="mt-2 text-[8px] poppins">AM</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('/images/Rectanglem.svg') }}" class="mx-auto">
                    <div id="barcode-box" class="h-[38px] max-w-[414px] rounded bg-white relative p-5">
                        <img src="{{ asset('/images/barcode.png') }}" class="h-[28px] w-[450px] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>