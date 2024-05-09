<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Driver; // Import the Driver model

class F1DriversController extends Controller
{
    public function index()
    {
        $response = Http::get('https://ergast.com/api/f1/current/drivers.json');
        $drivers = $response->json()['MRData']['DriverTable']['Drivers'];
        return view('f1_drivers', compact('drivers'));
    }

    public function show($driverId) {
        $driver = Driver::find($driverId); // Fetch the driver details based on $driverId
        return view("drivers.show", ["driver" => $driver]);
    }
}