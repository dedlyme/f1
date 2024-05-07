<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class F1DriversController extends Controller
{
    public function index()
    {
        $response = Http::get('https://ergast.com/api/f1/current/drivers.json');
        $drivers = $response->json()['MRData']['DriverTable']['Drivers'];
        return view('f1_drivers', compact('drivers'));
    }
}
