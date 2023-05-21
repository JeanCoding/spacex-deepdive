<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Location;

class FlightsController extends Controller
{
    // Toont een lijst van vluchten met optionele filters.
    public function index()
    {
        // Haal alle vluchten op inclusief de bijbehorende vertrek- en aankomstlocaties
        $flights = Flight::with(['departure', 'arrival'])->get();

        // Filter op basis van vertreklocatie
        if (!empty($_GET['departure'])) {
            // Haal het vertreklocatie-id op basis van de locatienaam
            $departure_id = Location::where('name', $_GET['departure'])->value('id');
            $flights = Flight::where('departure_id', $departure_id)->get();
        }

        // Filter op basis van aankomstlocatie
        if (!empty($_GET['arrival'])) {
            // Haal het aankomstlocatie-id op basis van de locatienaam
            $arrival_id = Location::where('name', $_GET['arrival'])->value('id');
            $flights = Flight::where('arrival_id', $arrival_id)->get();
        }

        // Filter op basis van datum
        if (!empty($_GET['date'])) {
            // Filter de vluchten op basis van de opgegeven datum
            $flights = Flight::where('date', $_GET['date'])->get();
        }

        // Filter op basis van vertreklocatie, aankomstlocatie
        if (!empty($_GET['departure']) && !empty($_GET['arrival'])) {
            $departure_id = Location::where('name', $_GET['departure'])->value('id');
            $arrival_id = Location::where('name', $_GET['arrival'])->value('id');
            $flights = Flight::where('departure_id', $departure_id)->where('arrival_id', $arrival_id)->get();
        }

        // Filter op basis van vertreklocatie, aankomstlocatie en datum 
        if (!empty($_GET['departure']) && !empty($_GET['arrival']) && !empty($_GET['date'])) {
            // Haal het vertreklocatie-id op basis van de locatienaam
            $departure_id = Location::where('name', $_GET['departure'])->value('id');
            // Haal het aankomstlocatie-id op basis van de locatienaam
            $arrival_id = Location::where('name', $_GET['arrival'])->value('id');
            // Filter de vluchten op basis van het vertreklocatie-id, aankomstlocatie-id en datum
            $flights = Flight::where('departure_id', $departure_id)->where('arrival_id', $arrival_id)->where('date', $_GET['date'])->get();
        }

        // Toon de vluchten op de landing page
        return view('welcome', ['flights' => $flights]);
    }

    // Toont de eerste stap van het boekingsproces voor een specifieke vlucht
    public function stepOne($id)
    {
        // Haalt de vlucht op inclusief de bijbehorende vertrek- en aankomstlocaties
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        // Gaat naar de eerste bookings stap
        return view('booking-one', ['flight' => $flight, 'id' => $id]);
    }
}
