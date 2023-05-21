<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class OrderController extends Controller
{
    public function stepOne($id)
    {
        $flights = Flight::with(['departure', 'arrival'])->get();
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        return view('booking-one', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }
    
    public function stepTwo($id)
    {
        $flights = Flight::with(['departure', 'arrival'])->get();
        $flight = Flight::with(['departure', 'arrival'])->find($id);
        $is_on_water = $flight->departure->is_on_water;

        return view('booking-two', ['flight' => $flight, 'flights' => $flights, 'is_on_water' => $is_on_water, 'id' => $id]);
    }

    public function stepThree($id)
    {
        $flights = Flight::with(['departure', 'arrival'])->get();
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        return view('booking-three', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }

    public function stepFour($id)
    {
        $flights = Flight::with(['departure', 'arrival'])->get();
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        return view('booking-four', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }

    public function finish($id)
    {
        $flights = Flight::with(['departure', 'arrival'])->get();
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        return view('booking-finish', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }
    
}
