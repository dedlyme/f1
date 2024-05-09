<x-layout>
    <x-slot name="heading">
        Current F1 Drivers
    </x-slot>

    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Current F1 Drivers</h1>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Driver</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nationality</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">DOB</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($drivers as $driver)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $driver['givenName'] }} {{ $driver['familyName'] }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $driver['nationality'] }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $driver['dateOfBirth'] }}</td>
                    <td>...</td> <!-- Add more columns as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>