<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Location;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = Flight::with(['departure', 'arrival'])->get();

        if (!empty($_GET['departure'])) {
            $departure_id = Location::where('name', $_GET['departure'])->value('id');
            $flights = Flight::where('departure_id', $departure_id)->get();
        }

        if (!empty($_GET['arrival'])) {
            $arrival_id = Location::where('name', $_GET['arrival'])->value('id');
            $flights = Flight::where('arrival_id', $arrival_id)->get();
        }

        if (!empty($_GET['date'])) {
            $flights = Flight::where('date', $_GET['date'])->get();
        }

        if (!empty($_GET['departure']) && !empty($_GET['arrival'])) {
            $departure_id = Location::where('name', $_GET['departure'])->value('id');
            $arrival_id = Location::where('name', $_GET['arrival'])->value('id');
            $flights = Flight::where('departure_id', $departure_id)->where('arrival_id', $arrival_id)->get();
        }

        if (!empty($_GET['departure']) && !empty($_GET['arrival']) && !empty($_GET['date'])) {
            $departure_id = Location::where('name', $_GET['departure'])->value('id');
            $arrival_id = Location::where('name', $_GET['arrival'])->value('id');
            $flights = Flight::where('departure_id', $departure_id)->where('arrival_id', $arrival_id)->where('date', $_GET['date'])->get();
        }

        return view('welcome', ['flights' => $flights]);
    }

    public function stepOne($id)
    {
        $flight = Flight::with(['departure', 'arrival'])->find($id);

        return view('booking-one', ['flight' => $flight, 'id' => $id]);
    }
}
