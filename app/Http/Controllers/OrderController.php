<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class OrderController extends Controller
{
    public function stepOne($id)
    {
        // Haalt alle vluchten op, inclusief vertrek- en aankomstinformatie
        $flights = Flight::with(['departure', 'arrival'])->get();
        
        // Zoekt de specifieke vlucht op basis van het ID
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        // Geeft de view 'booking-one' door met de vluchtgegevens en het ID
        return view('booking-one', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }
    
    public function stepTwo($id)
    {
        // Haalt alle vluchten op, inclusief vertrek- en aankomstinformatie
        $flights = Flight::with(['departure', 'arrival'])->get();
        
        // Zoekt de specifieke vlucht op basis van het ID
        $flight = Flight::with(['departure', 'arrival'])->find($id);
        
        // Controleert of de vertreklocatie op het water ligt
        $is_on_water = $flight->departure->is_on_water;

        // Geeft de view 'booking-two' door met de vluchtgegevens, het ID en of de vertreklocatie op het water ligt
        return view('booking-two', ['flight' => $flight, 'flights' => $flights, 'is_on_water' => $is_on_water, 'id' => $id]);
    }

    public function stepThree($id)
    {
        // Haalt alle vluchten op, inclusief vertrek- en aankomstinformatie
        $flights = Flight::with(['departure', 'arrival'])->get();
        
        // Zoekt de specifieke vlucht op basis van het ID
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        // Geeft de view 'booking-three' door met de vluchtgegevens en het ID
        return view('booking-three', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }

    public function stepFour($id)
    {
        // Haalt alle vluchten op, inclusief vertrek- en aankomstinformatie
        $flights = Flight::with(['departure', 'arrival'])->get();
        
        // Zoekt de specifieke vlucht op basis van het ID
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        // Geeft de view 'booking-four' door met de vluchtgegevens en het ID
        return view('booking-four', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }

    public function finish($id)
    {
        // Haalt alle vluchten op, inclusief vertrek- en aankomstinformatie
        $flights = Flight::with(['departure', 'arrival'])->get();
        
        // Zoekt de specifieke vlucht op basis van het ID
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        // Geeft de view 'booking-finish' door met de vluchtgegevens en het ID
        return view('booking-finish', ['flight' => $flight, 'flights' => $flights, 'id' => $id]);
    }
}
