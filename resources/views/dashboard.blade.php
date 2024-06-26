<!-- App Layout Component -->
<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Header Slot -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Content Slot -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    
                    <!-- Continue Button -->
                    <div class="mt-4">
                        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Continue') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>