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
                            Champion: {{ $season['champion'] }}
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>