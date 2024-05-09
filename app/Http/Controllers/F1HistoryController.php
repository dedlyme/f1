<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class F1HistoryController extends Controller
{
    public function index()
    {
        // Fetch data from the Ergast API
        $response = Http::get('http://ergast.com/api/f1/seasons.json');
        $seasons = $response->json()['MRData']['SeasonTable']['Seasons'];
    
        // Pass the data to the view
        return view('f1_history', compact('seasons'));
    }
}




