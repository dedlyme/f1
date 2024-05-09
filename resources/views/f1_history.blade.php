<x-layout>
    <x-slot name="heading">
        F1 History
    </x-slot>

    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">F1 History</h1>
        <ul class="grid grid-cols-1 gap-4">
            @foreach($seasons as $season)
                <li class="bg-white shadow-md rounded-md p-4">
                    <a href="{{ $season['url'] }}" class="text-blue-600 hover:underline">{{ $season['season'] }}</a>
                    <div class="flex justify-between mt-2">
                        <span class="text-gray-600">
                            @php
                                // Extract the year from the season string
                                $year = $season['season'];

                                // API URL for the champions of a specific year
                                $championsUrl = "http://ergast.com/api/f1/{$year}/driverStandings/1.json";

                                // Fetching the champions data
                                $championsData = json_decode(file_get_contents($championsUrl), true);

                                // Check if the champions data is available
                                if(isset($championsData['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'][0]['Driver']['familyName'])) {
                                    $champion = $championsData['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'][0]['Driver']['familyName'];
                                    echo "Champion: $champion";
                                } else {
                                    echo "Champion: N/A";
                                }
                            @endphp
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>