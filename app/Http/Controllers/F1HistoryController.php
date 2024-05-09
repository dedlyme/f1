<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class F1HistoryController extends Controller
{
    public function index()
    {
        // Array to store season data
        $seasons = [];

        // Loop through seasons from 1950 to 2024
        for ($year = 1950; $year <= 2024; $year++) {
            $champion = $this->getChampionForYear($year);
            $seasons[] = [
                'season' => $year,
                'champion' => $champion,
                'url' => "http://en.wikipedia.org/wiki/{$year}_Formula_One_season",
            ];
        }

        // Pass the data to the view
        return view('f1_history', compact('seasons'));
    }

    // Function to fetch the champion for a specific year
    private function getChampionForYear($year)
    {
        $championsUrl = "http://ergast.com/api/f1/{$year}/driverStandings/1.json";
        $championsData = json_decode(file_get_contents($championsUrl), true);
        return isset($championsData['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'][0]['Driver']['familyName']) ? $championsData['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'][0]['Driver']['familyName'] : 'N/A';
    }
}